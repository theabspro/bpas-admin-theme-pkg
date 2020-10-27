@if(config('bpas-admin-theme-pkg.DEV'))
    <?php $bpas_admin_theme_pkg_prefix = '/packages/abs/bpas-admin-theme-pkg/src';?>
@else
    <?php $bpas_admin_theme_pkg_prefix = '';?>
@endif

<script type="text/javascript">
	app.config(['$routeProvider', function($routeProvider) {

	    $routeProvider.
	    when('/', {
	        template: '<home></home>',
	        title: 'Theme Home',
	    }).
	    when('/login', {
	        template: '<login></login>',
	        title: 'Login',
	    }).
	    when('/forgot-password', {
	        template: '<forgot-password></forgot-password>',
	        title: 'Forgot Password',
	    }).
	    when('/reset-password', {
	        template: '<reset-password></reset-password>',
	        title: 'Reset Password',
	    });
	}]);

    var bpas_admin_theme_home_template_url = "{{asset($bpas_admin_theme_pkg_prefix.'/public/themes/'.$theme.'/static-pages/home.html')}}";
    var bpas_admin_theme_login_template_url = "{{asset($bpas_admin_theme_pkg_prefix.'/public/themes/'.$theme.'/static-pages/auth/login.html')}}";
</script>
<script type="text/javascript" src="{{asset($bpas_admin_theme_pkg_prefix.'/public/themes/'.$theme.'/static-pages/controller.js')}}"></script>
