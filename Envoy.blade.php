@servers(['web' => ['dropletps']])


@task('list', ['on'=>'web'])
	ls -la
@endtask
