@setup
    $user = 'fastuser';
    $timezone = 'Europe/Moscow';

    $path = '/var/www/mobile.developing.su';
    $current = $path . '/current';

    $repo = "git@github.com:EvgenyFedorov/rest-api-service.git";
    $branch = 'master';

    $chmods = [
    'storage/logs'
    ];

    $date = new datetime('now', new DateTimeZone($timezone));
    $release = $path . '/releases/' . $date->format('YmdHis');
@endsetup

@servers(['production' => $user . '@5.45.123.200'])

@task('clone', ['on' => $on])
    mkdir -p {{$release}}

    git clone --depth 1 -b {{$branch}} "{{$repo}}" {{$release}}

    echo "#1 - Repository has been cloned"
@endtask

@task('composer', ['on' => $on])
    composer self-update

    cd {{$release}}

    composer install --no-interaction --no-dev --prefer-dist

    echo "#2 - Composer dependencies have been installed"
@endtask

@task('artisan', ['on' => $on])
    cd {{$release}}

    ln -nfs {{$path}}/.env .env;
    chgrp -h www-data .env;

    php artisan config:clear

    php artisan migrate
    php artisan clear-compiled --env=production;
    php artisan optimize --env=production;

    echo "#3 - Composer dependencies have been installed"
@endtask

@task('chmod', ['on' => $on])
    chgrp -R www-data {{$release}};
    chmod -R ug+rwx {{$release}};

    @foreach ($chmods as $file)
        chmod R -755 {{$release}}/{{$file}}

        chown -R {{$user}}:www-data {{$release}}/{{$file}}

        echo "Permissions have been set for {{$file}}"
    @endforeach

    echo "#4 - Permissions has been set"
@endtask

@task('update_symlinks', ['on' => $on])
    ln -nfs {{$release}} {{$current}};
    chgrp -h www-data {{$current}};

    echo "#5 - Symlink has been set"
@endtask

@story('deploy')
    clone
    composer
    artisan
    chmod
    update_symlinks
@endstory
