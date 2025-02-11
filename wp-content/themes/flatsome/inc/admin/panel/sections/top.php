<?php
/**
 * Flatome Panel
 */
?>
<?php add_thickbox(); ?>
<?php $flatsome_ver = wp_get_theme( get_template() );  ?>
<h1>
    <?php echo 'به ایران فلتسام خوش آمدید!'; ?>
</h1>
<div class="about-text">
<?php _e( ' از اینکه قدرتمندترین پوسته ووکامرس و چند منظوره دنیا را انتخاب کرده‌اید متشکریم. این برگه به شما کمک خواهد کرد تا با فلت‌سام سریع‌تر آشنا شوید و آن را راه‌اندازی کنید.', 'flatsome-admin' ); ?>
    <br><br>
    <a href="<?php echo admin_url().'admin.php?page=flatsome-setup'; ?>" class="button button-primary button-large"><?php _e('راه انداز اولیه', 'flatsome-admin' ); ?></a>
</div>

<div class="wp-badge fl-badge">Version <?php echo $flatsome_ver['Version']; ?></div>

<h2 class="nav-tab-wrapper">
    <?php $url = admin_url().'admin.php?page=flatsome-panel' ?>
    <a href="<?php echo $url; ?>" class="nav-tab <?php if($_GET['page'] == 'flatsome-panel') echo 'nav-tab-active'; ?>"><?php _e('لایسنس', 'flatsome-admin' ); ?></a>

    <a href="<?php echo $url.'-support'; ?>" class="nav-tab <?php if($_GET['page'] == 'flatsome-panel-support') echo 'nav-tab-active'; ?>"><?php _e( 'پشتیبانی و آموزش', 'flatsome-admin' ); ?></a>

	<a href="<?php echo $url.'-status'; ?>" class="nav-tab <?php if($_GET['page'] == 'flatsome-panel-status') echo 'nav-tab-active'; ?>"><?php _e( 'وضعیت', 'flatsome-admin' ); ?></a>

    <a href="<?php echo $url.'-changelog'; ?>" class="nav-tab <?php if($_GET['page'] == 'flatsome-panel-changelog') echo 'nav-tab-active'; ?>"><?php _e( 'تغییرات قالب', 'flatsome-admin' ); ?></a>
</h2>

<script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});</script>
<script type="text/javascript">window.Beacon('init', 'e1ec051d-ef26-4fa7-9fe1-ddb133afb116')</script>
