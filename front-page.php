<?php get_header() ;?>
<div id="content" class="page_front w_inner">
<section class="front_service">
<div class="sec_head">サービス</div>
<div class="lead">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
<ul class="s_box">
    <li>
        <div class="ttl">ホームページ制作</div>
        <div class="desri">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
    </li>
    <li>
        <div class="ttl">ランディングページ制作</div>
        <div class="descri">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
    </li>
    <li>
        <div class="ttl">SEOコンサルティング</div>
        <div class="descri">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
    </li>
</ul>
</section>
<section class="front_news">
    <div class="sec_head">お知らせ</div>
    <div class="news_list">
        <ul>
           <?php if (have_posts()): ?>
           <?php while (have_posts()): the_post();?><!-- ループ開始 -->
           <li>
                <a href="<?php_the_permalink() ;?>">
                    <div class="date"><?php echo get_the_date('Y.m.d');?></div>
                    <div class="ttl"><?php the_title();?></div>
                </a>    
            </li>  
           <?php endwhile; endif; ?><!-- /ループ終わり -->

        <div class="btn_stn"><a href="<?php bloginfo('url');?>/news">一覧をみる</a></div>
    </div>
    </section>
</div>
<?php get_footer() ;?>