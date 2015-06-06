<?php
/**
 * CNAEF
 *
 * 程序入口。
 *
 * @version 1.0.1
 *
 * @include
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) include "../error-forbidden.php";

class App extends Safe
{

    function __construct()
    {
        // 初始化运行参数
        core::init_args(func_get_args());

        // 初始化路由
        self::init_route();
    }

    /**
     * 初始化路由
     *
     * @since  0.0.1
     * @notice 主要的路径下，尽可能囊括更多的选择，诸如/join/?123
     */
    private function init_route()
    {
        route::register('/', 'index');
        route::register('/index.php', 'index');
        route::register('/\?.*', 'index', true);

        route::register('/join', 'join');
        route::register('/join\?.*', 'join', true);
        route::register('/join/\?.*', 'join', true);
        route::register('/baoming', 'join');
        route::register('/baoming\?.*', 'join', true);
        route::register('/baoming/\?.*', 'join', true);

        route::register('/about', 'about');
        route::register('/about\?.*', 'about', true);
        route::register('/about/\?.*', 'about', true);

        route::register('/links', 'links');
        route::register('/links\?.*', 'links', true);
        route::register('/links/\?.*', 'links', true);

        route::register('/contact', 'contact');
        route::register('/contact\?.*', 'contact', true);
        route::register('/contact/\?.*', 'contact', true);

        route::register('/bbs', 'bbs');
        route::register('/bbs\?.*', 'bbs', true);
        route::register('/bbs/\?.*', 'bbs', true);
        route::register('/dispbbs.asp', 'bbs');
        route::register('/dispbbs.asp\?.*', 'bbs', true);
        route::register('/index.asp', 'bbs');
        route::register('/index.asp\?.*', 'bbs', true);

        route::register('/forum', 'forum');
        route::register('/forum\?.*', 'forum', true);
        route::register('/forum/\?.*', 'forum', true);
        route::register('/thread', 'forum');
        route::register('/thread\?.*', 'forum', true);
        route::register('/thread/\?.*', 'forum', true);
        route::register('/home.php', 'forum');
        route::register('/home.php\?.*', 'forum', true);
        route::register('/member.php', 'forum');
        route::register('/member.php\?.*', 'forum', true);

        route::register('/hi-cat', 'hi_cat');
        route::register('/hi-cat\?.*', 'hi_cat', true);
        route::register('.*', 'page404', true);

        new Route();
    }

    public function hi_cat()
    {
        echo 'hi-cat';
    }


    public function page404()
    {
        var_dump($_SERVER);
        echo '404';
    }

    public function index()
    {
        echo 'index';

        return true;
    }

    public function join()
    {
        echo 'join';

        return true;
    }

    public function about()
    {
        echo 'about';

    }

    public function links()
    {
        echo 'links';
    }

    /**
     * 处理之前的PHP论坛的请求
     */
    public function forum()
    {
        $orig = $_SERVER['SCRIPT_URI'];
        $target = str_replace("www.go9999.com", "bbs.go9999.com", $orig);
        if (isset($_SERVER['REDIRECT_QUERY_STRING']) && !empty($_SERVER['REDIRECT_QUERY_STRING'])) {
            $target = $target . "?" . $_SERVER['REDIRECT_QUERY_STRING'];
        }
        header('Location: ' . $target);
        exit;
    }

    /**
     * 处理之前ASP论坛的请求
     */
    public function bbs()
    {
        header('Location: http://bbs.go9999.com');
        exit;
    }


    /**
     * 根据路由名称获得页面META数据
     *
     * @param $route
     *
     * @return mixed
     */
    private function get_page_meta($route)
    {
        $title_append = ' - ' . C_SITE_NAME;
        $default_keyword = '中国支教联盟,志愿者招募,志愿者,招募,支教,支教网,中国支教网,支教联盟,中国支教,中国支教联盟网,支教网站,go9999,中国支教联盟官网,云南支教网,支教中国,全国支教网,支教 中国,中华支教,短期支教,长期支教,支教志愿者,四川支教网,贵州四川广西湖南支教';
        $desc_prefix = '中国•支教联盟(CNAEF)，';

        switch ($route) {
            case 'LINKS':
                $PAGE['TITLE'] = '友情链接' . $title_append;
                $PAGE['KEYWORD'] = $default_keyword;
                $PAGE['DESC'] = $desc_prefix . '友情链接页面。';
                $PAGE['MODULE'] = 'links';
                break;
            case 'CONTACT':
                $PAGE['TITLE'] = '留言墙' . $title_append;
                $PAGE['KEYWORD'] = $default_keyword;
                $PAGE['DESC'] = $desc_prefix . '留言墙页面。';
                $PAGE['MODULE'] = 'contact';
                break;
            case 'ABOUT':
                $PAGE['TITLE'] = '关于我们' . $title_append;
                $PAGE['KEYWORD'] = $default_keyword;
                $PAGE['DESC'] = $desc_prefix . '创办于2006年4月。自成立以来，长期致力于为发达地区爱心咨询寻找资助对象，为欠发达地区教育引入社会各界力量。';
                $PAGE['MODULE'] = 'about';
                break;
            case 'JOIN':
                $PAGE['TITLE'] = '志愿者招募' . $title_append;
                $PAGE['KEYWORD'] = $default_keyword;
                $PAGE['DESC'] = $desc_prefix . '志愿者招募申请地址，我们期待你的加入。';
                $PAGE['MODULE'] = 'join';
                break;
            default:
                $PAGE['TITLE'] = C_SITE_NAME;
                $PAGE['KEYWORD'] = $default_keyword;
                $PAGE['DESC'] = $desc_prefix . '创办于2006年4月。自成立以来，长期致力于为发达地区爱心咨询寻找资助对象，为欠发达地区教育引入社会各界力量。';
                $PAGE['MODULE'] = 'index';
                break;
        }

        return $PAGE;
    }

}