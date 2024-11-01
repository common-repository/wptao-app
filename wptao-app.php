<?php
/*
Plugin Name: wptaoAPP
Author: 水脉烟香
Author URI: https://wptao.com/smyx
Plugin URI: https://wptao.com/wptao-app.html
Description: WordPress淘宝客APP/小程序 配置工具
Version: 0.1
*/

add_action('admin_menu', 'wptao_app_add_page');
function wptao_app_add_page() {
	if (function_exists('add_menu_page')) {
		add_menu_page('wptaoAPP', 'wptaoAPP', 'manage_options', 'wptao-app', 'wptao_app_do_page', WPTAO_APP_URL .'/admin/images/small-icon.png');
	} 
} 
add_action('plugin_action_links_' . plugin_basename(__FILE__), 'wptao_app_plugin_actions');
function wptao_app_plugin_actions($links) {
    $new_links = array();
    $new_links[] = '<a href="options-general.php?page=wptao-app">' . __('Settings') . '</a>';
    return array_merge($new_links, $links);
}
// 设置 Setting
function wptao_app_do_page() {
	echo '<div class="updated">
	<p>★安卓app下载链接: <a href="http://go.wptao.com/youhuimeapp" target="_blank" rel="noopener noreferrer">点击下载</a></p>
	<p>★微信小程序：</p>
	<p><a href="http://img2.wptao.cn/images/mpweixin-youhuime.jpg" target="_blank" rel="noopener noreferrer"><img style="margin: 0;display:inline" src="http://img2.wptao.cn/images/mpweixin-youhuime.jpg" alt="" /></a></p>
	<p></p>
	<p>如需查看本插件后台请看：<a href="http://youhuime.com/wp-admin/admin.php?page=wptao-app" target="_blank" rel="noopener noreferrer">点击这里</a>（帐号和密码都是<code>test</code>）</p>
	<p></p>
	<p>如需购买APP/小程序请看：<a href="https://wptao.com/wptao-app.html" target="_blank" rel="noopener noreferrer">https://wptao.com/wptao-app.html</a></p>
	</div>';
}
?>