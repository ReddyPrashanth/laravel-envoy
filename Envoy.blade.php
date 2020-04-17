@servers(['web' => ['dropletps']])


@task('git')
	cd /home/psreepathi/laravel-projects/laravel-envoy
	git pull origin master
@endtask


@task('composer')
	cd /home/psreepathi/laravel-projects/laravel-envoy
	composer install --no-interaction --prefer-dist --optimize-autoloader
@endtask


@task('npm')
	cd /home/psreepathi/laravel-projects/laravel-envoy
	npm install
	npm rundev
@endtask


@task('migrate')
	cd /home/psreepathi/laravel-projects/laravel-envoy
	
	if [ -f artisan]
	then
		php artisan migrate --force 
	fi
@endtask

@story('deploy')
	git
	composer
	npm
	migrate
@endstory