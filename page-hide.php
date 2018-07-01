<?php
/**
Template Name: 图片增加隐藏信息
*/
get_header(); ?>
    <div id="container" class="container">
        <div class="row">
            <?php if(kratos_option('page_side_bar')=='left_side'&&!wp_is_mobile()){ ?>
                <aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
                    <div id="sidebar" class="affix-top">
                        <?php dynamic_sidebar('sidebar_tool'); ?>
                    </div>
                </aside>
            <?php } ?>
            <section id="main" class='<?php echo (kratos_option('page_side_bar')=='center')?'col-md-12':'col-md-8'; ?>'>
            <?php if(have_posts()){the_post(); ?>
                <article>
                    <div class="kratos-hentry kratos-post-inner clearfix">
                        <div class="kratos-post-content">
	<h3 class='explainer'>
	图片增加隐藏信息
	</h3>
	<h4 class="strong">
	一、加密
	</h4>
	<div class='divider'>
	</div>
	1. 从电脑中选择一张用于加密信息的图片：
	<div class='span'>
	<input type="file" accept="image/*" id="origin_image" onchange="importImage();"/>
	</div>
	2. 输入你要隐藏到图片中的文字信息（比如：原图出处：XXX"）：
	<div class='span six'>
	<input type="text" class="mytxt" id="secret_text" />
	</div>
	3. 输入解密口令（可为空，但建议添加密码）：
	<div class='span six'>
	<input type="password" class="mytxt" id="secret_pwd" />
	</div>
    <br>
	<button onclick="javascript:encode()" type="button">
	加密
	</button>
	<div class="alert success">
	<canvas id="result_image" class="hidden">
	</canvas>
	<div id="encode_tip" class="strong">
	</div>
	<img id='result_image_output' />
	</div>
	<div class='divider'>
	</div>
	<h4 class="strong">
	二、解密
	</h4>
	<div class='divider'>
	</div>
	1. 从电脑中选择一张带有隐藏信息的图片：
	<div class='span'>
	<input type="file" accept="image/*" id="decode_image" onchange="javascript:selectEncodeImage()"/>
	</div>
	2. 输入解密口令（没有则不填）：
	<div class='span six'>
	<input type="password" class="mytxt" id="decode_pwd" />
	</div>
    <br>
	<button onclick="javascript:decode()" type="button">
	解密
	</button>
	<div class="alert success">
	<canvas id="decode_result_image" class="hidden">
	</canvas>
	<div class="strong" id="messageDecoded">
	</div>
	</div>
	<script src='http://chs.clovef.top/demo/js/sjcl.js' type='text/javascript'>
	</script>
	<script src='http://chs.clovef.top/demo/js/main.js' type='text/javascript'>
	</script>
	<div class='divider'>
	</div>


                        <?php if(kratos_option('page_like_donate')||kratos_option('page_share')){ ?>
                        <footer class="kratos-entry-footer clearfix">
                            <div class="post-like-donate text-center clearfix" id="post-like-donate"><?php
                                if(kratos_option('page_like_donate')) echo '<a href="javascript:;" class="Donate"><i class="fa fa-bitcoin"></i> 打赏</a>';
                                if(kratos_option('page_share')){
                                    echo '<a href="javascript:;" class="Share"><i class="fa fa-share-alt"></i> 分享</a>';
                                    require_once(get_template_directory().'/inc/share.php');
                                } ?>
                            </div>
                        </footer>
                        <?php } ?>
                    </div>
                        <?php if(kratos_option('page_cc')){ ?>
                        <div class="kratos-hentry kratos-copyright text-center clearfix">
                            <img alt="知识共享许可协议" src="<?php echo get_template_directory_uri(); ?>/images/licenses.png">
                            <h5>本作品采用 <a rel="license nofollow" target="_blank" href="http://creativecommons.org/licenses/by-sa/4.0/">知识共享署名-相同方式共享 4.0 国际许可协议</a> 进行许可</h5>
                        </div>
                        <?php }
                        comments_template(); ?>
                </article>
            <?php } ?>
            </section>
            <?php if(kratos_option('page_side_bar')=='right_side'&&!wp_is_mobile()){ ?>
            <aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
                <div id="sidebar" class="affix-top">
                    <?php dynamic_sidebar('sidebar_tool'); ?>
                </div>
            </aside>
            <?php } ?>
        </div><?php
        if(current_user_can('manage_options')&&is_single()||is_page()){ ?><div class="cd-tool text-center"><div class="<?php if(kratos_option('cd_weixin')) echo 'edit-box2 '; ?>edit-box"><?php echo edit_post_link('<span class="fa fa-pencil"></span>'); ?></div></div><?php }
        if(kratos_option('script_tongji')) echo '<script type="text/javascript">'.kratos_option('script_tongji').'</script>'; ?>
    </div>
</div>
<?php get_footer(); ?>
