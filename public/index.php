<?php
define("SOULTEARY", "2013/10/30");
if(isset($_SERVER['REDIRECT_SCRIPT_URL'])&&!empty($_SERVER['REDIRECT_SCRIPT_URL'])){
    $url = strtolower($_SERVER['REDIRECT_SCRIPT_URL']);
    if ( substr($url, 0, 5) == '/join' ) {
        $PAGE['ACTION'] = 'JOIN';
    }else if ( substr($url, 0, 6) == '/about' ) {
        $PAGE['ACTION'] = 'ABOUT';
    }else if ( substr($url, 0, 8) == '/contact' ) {
        $PAGE['ACTION'] = 'CONTACT';
    }else if ( substr($url, 0, 6) == '/links' ) {
        $PAGE['ACTION'] = 'LINKS';
    }else if ( substr($url, 0, 4) == '/bbs'  || substr($url, 0, 12) =='/dispbbs.asp' || substr($url, 0, 10) =='/index.asp') {
        header('Location: http://bbs.go9999.com');
        exit();
    }else if ( substr($url, 0, 6) == '/forum' || substr($url, 0, 7) =='/thread' || substr($url, 0, 9) =='/home.php' || substr($url, 0, 11) =='/member.php') {
        $orig = $_SERVER['REDIRECT_SCRIPT_URI'];
        $target = str_replace("www.go9999.com","bbs.go9999.com",$orig);
        if(isset($_SERVER['REDIRECT_QUERY_STRING'])&&!empty($_SERVER['REDIRECT_QUERY_STRING'])){
            $target=$target."?".$_SERVER['REDIRECT_QUERY_STRING'];
        }
        header('Location: '.$target);
        exit();
    }else{
        $PAGE['ACTION'] = 'INDEX';
    }
}

switch ($PAGE['ACTION']) {
    case 'LINKS':
        $PAGE['TITLE'] = '友情链接 - 中国·支教联盟';
        $PAGE['KEYWORD'] = '中国支教联盟,志愿者招募,志愿者,招募,支教,支教网,中国支教网,支教联盟,中国支教,中国支教联盟网,支教网站,go9999,中国支教联盟官网,云南支教网,支教中国,全国支教网,支教 中国,中华支教,短期支教,长期支教,支教志愿者,四川支教网,贵州四川广西湖南支教';
        $PAGE['DESC'] = '中国•支教联盟(CNAEF)，友情链接页面。';
        $PAGE['MODULE'] = 'links';
        break;
    case 'CONTACT':
        $PAGE['TITLE'] = '留言墙 - 中国·支教联盟';
        $PAGE['KEYWORD'] = '中国支教联盟,志愿者招募,志愿者,招募,支教,支教网,中国支教网,支教联盟,中国支教,中国支教联盟网,支教网站,go9999,中国支教联盟官网,云南支教网,支教中国,全国支教网,支教 中国,中华支教,短期支教,长期支教,支教志愿者,四川支教网,贵州四川广西湖南支教';
        $PAGE['DESC'] = '中国•支教联盟(CNAEF)，留言墙页面。';
        $PAGE['MODULE'] = 'contact';
        break;
    case 'ABOUT':
        $PAGE['TITLE'] = '关于我们 - 中国·支教联盟';
        $PAGE['KEYWORD'] = '中国支教联盟,志愿者招募,志愿者,招募,支教,支教网,中国支教网,支教联盟,中国支教,中国支教联盟网,支教网站,go9999,中国支教联盟官网,云南支教网,支教中国,全国支教网,支教 中国,中华支教,短期支教,长期支教,支教志愿者,四川支教网,贵州四川广西湖南支教';
        $PAGE['DESC'] = '中国•支教联盟(CNAEF)，创办于2006年4月。自成立以来，长期致力于为发达地区爱心咨询寻找资助对象，为欠发达地区教育引入社会各界力量。';
        $PAGE['MODULE'] = 'about';
        break;
    case 'JOIN':
        $PAGE['TITLE'] = '志愿者招募 - 中国·支教联盟';
        $PAGE['KEYWORD'] = '中国支教联盟,志愿者招募,志愿者,招募,支教,支教网,中国支教网,支教联盟,中国支教,中国支教联盟网,支教网站,go9999,中国支教联盟官网,云南支教网,支教中国,全国支教网,支教 中国,中华支教,短期支教,长期支教,支教志愿者,四川支教网,贵州四川广西湖南支教';
        $PAGE['DESC'] = '中国•支教联盟(CNAEF)，志愿者招募申请地址，我们期待你的加入。';
        $PAGE['MODULE'] = 'join';
        break;
    default:
        $PAGE['TITLE'] = '中国·支教联盟';
        $PAGE['KEYWORD'] = '中国支教联盟,志愿者招募,志愿者,招募,支教,支教网,中国支教网,支教联盟,中国支教,中国支教联盟网,支教网站,go9999,中国支教联盟官网,云南支教网,支教中国,全国支教网,支教 中国,中华支教,短期支教,长期支教,支教志愿者,四川支教网,贵州四川广西湖南支教';
        $PAGE['DESC'] = '中国•支教联盟(CNAEF)，创办于2006年4月。自成立以来，长期致力于为发达地区爱心咨询寻找资助对象，为欠发达地区教育引入社会各界力量。';
        $PAGE['MODULE'] = 'index';
        break;
}

include('./view/header.tpl.php');
include('./view/nav.tpl.php');
include('./view/'.$PAGE['MODULE'].'.tpl.php');
include('./view/footer.tpl.php');
?>