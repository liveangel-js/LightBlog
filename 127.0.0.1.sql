-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2012 年 12 月 05 日 13:53
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `blog`
--
CREATE DATABASE `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `blog`;

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8_bin NOT NULL,
  `content` varchar(2000) COLLATE utf8_bin NOT NULL,
  `time` varchar(40) CHARACTER SET latin1 NOT NULL,
  `uid` int(10) NOT NULL,
  `hot` int(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=49 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`aid`, `title`, `content`, `time`, `uid`, `hot`) VALUES
(1, '电影流年', '<p><img src="/ueditor/php/upload/20121204/13546388369311.gif" title="1.GIF" /><br /></p><p>冰河世纪4</p><p><br /></p><p>里那些值得纪念的话:</p><p><br /></p><p> &nbsp; &nbsp;1、为什么你们活的快乐 。因为我们缺心眼。</p><p><br /></p><p>　　2、奶奶对两只老虎说：千万别再我面前接吻，我会吐的~</p><p> </p><p>　　3、妈妈对桃子说：别为别人改变自己。</p><p> </p><p>　　4、奶奶会活得比我们长的，因为人至贱则长命百岁~~哈哈！</p><p><br /></p><p>　　5、迪亚哥：我不认为你能行。</p><p><br /></p><p>　　6、如果我不幸遇难，就帮我找个老婆，帮我告诉她我爱他。</p><p><br /></p><p>当然还包括小老鼠路易斯挺身而出的那句：“放开桃子！”</p>', '1354638878', 2, 0),
(2, '疾风传', '<p><img src="/ueditor/php/upload/20121204/13546389412843.jpg" title="p_large_i8vP_735500000c891262.jpg" /><br /></p><p>六道仙人与尾兽~<br /></p>', '1354638968', 3, 0),
(3, '宇智波~羁绊', '<p><img src="/ueditor/php/upload/20121204/1354639047778.jpg" title="火影-----0.jpg" /><br /></p>', '1354639056', 4, 0),
(4, '旅途', '<p><img src="/ueditor/php/upload/20121204/13546391467211.jpg" title="旅途.jpg" /><br /></p><p>最是那一抹~夕阳~</p>', '1354639177', 5, 0),
(5, '黑与白', '<p><img src="/ueditor/php/upload/20121204/13546392409780.jpg" title="a.jpg" /><br /></p>', '1354639304', 2, 0),
(6, '南京哪个大学~biu~', '<p><img src="/ueditor/php/upload/20121204/13546393788976.jpg" title="NJU-----6.jpg" /><br /></p><p><img src="/ueditor/php/upload/20121204/13546394271508.jpg" style="float:none;" title="NJU-----5.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546394287345.jpg" style="float:none;" title="NJU-----4.jpg" /></p><p><br /></p>', '1354639442', 3, 0),
(7, '木渎中学~', '<p><img src="/ueditor/php/upload/20121204/135463961964.jpg" title="高考返校-----1.jpg" /><br /></p><p>那里~你们~我~</p>', '1354639660', 4, 0),
(8, '生~活', '<p><img src="/ueditor/php/upload/20121204/13546397416486.jpg" title="12.jpg" />2012年五月我写生</p><p><br /></p><p>从广州到安徽 &nbsp; 杭州 &nbsp; 苏州 &nbsp; 乌镇 &nbsp; 周庄 &nbsp;上海 &nbsp;六个地方</p><p><br /></p><p>都说末日了 &nbsp; &nbsp;到过这些地方 &nbsp; 学到的东西</p><p><br /></p><p>我没不满 &nbsp; 觉得很有价值</p><p><br /></p><p>当时是数码相机 &nbsp; 但也真好</p><p><br /></p><p>留做怀念</p><p><br /></p>', '1354639778', 5, 0),
(9, '台北~飘雪', '<p>喜欢一个人的孤独，但又不能喜欢太多；唯有离开你，才是旅行的意义。</p><p>逃避不会让一个人忘记另一个人，但逃避却很有可能让另另一个人又走</p><p>进这个人的心底。</p><p> &nbsp; &nbsp; 《台北飘雪》的剧本改编自日本青春爱情小说，讲述了大陆女歌手</p><p>五月（又名May，童瑶 饰）和台湾青年小莫（陈柏霖 饰）之间的情感</p><p>故事。 五月由于突然失声，加之与制作人也是暗恋对象的阿雷</p><p>（杨佑宁饰）闹矛盾，愤而出走，来到陌生的菁桐古镇，所幸遇到小莫。</p><p>热心的小莫帮助她找到了住处，并介绍在小餐馆打工，其间二人暗生情</p><p>愫，互有好感。后来……</p><p style="text-align:center"><img src="/ueditor/php/upload/20121204/13546399812060.jpeg" title="1.JPEG" width="520" height="743" border="0" hspace="0" vspace="0" style="width:520px;height:743px;" /></p>', '1354640006', 6, 0),
(10, '突突突突', '<p><img src="http://img.baidu.com/hi/tsj/t_0001.gif" /><a href="http://www.youku.com/" target="_self" title="啦啦啦">优酷酷酷</a><br /></p>', '1354640185', 7, 0),
(11, '最是那一低头的娇羞', '<p>娇羞5克<img src="http://img.baidu.com/hi/jx2/j_0001.gif" /><br /></p><p><img src="http://img.baidu.com/hi/jx2/j_0034.gif" /><br /></p>', '1354640278', 8, 0),
(12, '可达鸭~~哒哒哒', '<p><img src="/ueditor/php/upload/20121204/13546403579273.jpg" title="qw.jpg" /><br /></p><p><br /></p>', '1354640373', 9, 0),
(13, '涂鸦呀呀哎呀呀', '<p><img src="/ueditor/php/upload/20121204/13546404618946.jpg" title="高中聚会-----1.jpg" /><br /></p>', '1354640467', 10, 0),
(14, 'BBBBBBBBBBBB哥', '<p><img src="/ueditor/php/upload/20121204/13546404906731.jpg" title="高中聚会-----51.jpg" /><br /></p>', '1354640506', 2, 0),
(15, '喵~喵~', '<p><img src="/ueditor/php/upload/20121204/13546405478859.jpg" title="NJUer-----6.jpg" width="520" height="520" border="0" hspace="0" vspace="0" style="width:520px;height:520px;float:none;" /><br /></p>', '1354640582', 3, 0),
(16, '小呆呆呆', '<p><img src="/ueditor/php/upload/20121204/13546406034862.jpg" title="NJUer-----10.JPG" /><br /></p>', '1354640630', 4, 0),
(17, '哈压库', '<p><img src="/ueditor/php/upload/20121204/13546407556966.jpg" style="float:none;" title="NJUer-----3.JPG" /></p><p><img src="/ueditor/php/upload/20121204/13546407552866.jpg" style="float:none;" title="NJUer-----2.JPG" /></p><p><img src="/ueditor/php/upload/20121204/13546407566431.jpg" style="float:none;" title="NJUer-----9.JPG" /></p><p><br /></p>', '1354640773', 5, 0),
(18, '弄哦内哦哒哒', '<p><img src="/ueditor/php/upload/20121204/13546408238807.jpg" style="float:none;width:520px;height:693px;" title="Life In NJU-----19.JPG" width="520" height="693" border="0" hspace="0" vspace="0" /></p><p><img src="/ueditor/php/upload/20121204/13546408231016.jpg" style="float:none;" title="Life In NJU-----3.jpg" /></p><p><br /></p>', '1354640842', 9, 0),
(19, 'NJU', '<p><img src="/ueditor/php/upload/20121204/13546408671192.jpg" style="float:none;" title="Life In NJU-----0.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546408689758.jpg" style="float:none;" title="Life In NJU-----1.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546408688919.jpg" style="float:none;" title="Life In NJU-----5.jpg" /></p>', '1354640897', 8, 0),
(20, '拉拉拉阿拉~', '<p><img src="/ueditor/php/upload/20121204/13546409766491.jpg" style="float:none;" title="小智&amp;&amp;小茂.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546409766978.jpg" style="float:none;" title="火影-----34.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546409771820.jpg" style="float:none;" title="火影-----51.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546409776899.jpg" style="float:none;" title="火影-----81.jpg" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="/ueditor/php/upload/20121204/13546410102217.jpg" title="火影-----11.jpg" /><img src="/ueditor/php/upload/20121204/13546410304272.jpg" title="火影-----20.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546409771050.jpg" style="float:none;" title="火影-----53.jpg" /></p><p><br /></p>', '1354641049', 7, 0),
(21, '莫名其妙~~', '<p><img src="/ueditor/php/upload/20121204/13546410976083.jpg" style="float:none;" title="妙蛙花.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546410977414.gif" style="float:none;" title="莫名其妙-----155.gif" /><img src="/ueditor/php/upload/20121204/13546411195346.gif" title="莫名其妙-----188.gif" style="float:none;" /><img src="/ueditor/php/upload/20121204/1354641146343.gif" title="莫名其妙-----7.gif" /><img src="/ueditor/php/upload/20121204/13546411358421.jpg" title="faf2b2119313b07e4607bfab0cd7912396dd8cdf.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546411197323.jpg" style="float:none;" title="莫名其妙-----29.jpg" /></p>', '1354641182', 6, 0),
(22, '萌啊萌', '<p><img src="/ueditor/php/upload/20121204/13546412234570.gif" style="float:none;" title="莫名其妙-----26.gif" /><img src="/ueditor/php/upload/20121204/13546412243387.gif" title="莫名其妙-----10.gif" style="float:none;" /></p><p><img src="/ueditor/php/upload/20121204/13546412247424.gif" style="float:none;" title="莫名其妙-----19.gif" /><img src="/ueditor/php/upload/20121204/13546412241371.gif" title="莫名其妙-----68.gif" style="float:none;" /></p><p><br /></p><p><br /></p><p><br /></p>', '1354641263', 10, 0),
(23, '那些年~我们一起追的女孩', '<p><img src="/ueditor/php/upload/20121204/13546413052495.jpg" title="莫名其妙-----123.jpg" /><br /></p>', '1354641333', 10, 0),
(24, '喵了个咪', '<p><img src="/ueditor/php/upload/20121204/13546413753503.jpg" style="float:none;" title="莫名其妙-----128.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546413757382.gif" style="float:none;" title="莫名其妙-----59.gif" /></p><p><br /></p>', '1354641393', 9, 0),
(25, '卖萌~', '<p><img src="/ueditor/php/upload/20121204/13546414437458.jpg" title="large_chOr_5d8700000455125b.jpg" /><br /></p>', '1354641459', 8, 0),
(26, '签名档', '<p><img src="/ueditor/php/upload/20121204/13546415042151.gif" style="float:none;" title="签名档-----4.gif" /></p><p><img src="/ueditor/php/upload/20121204/13546415044710.jpg" style="float:none;" title="签名档-----8.JPG" /></p><p><img src="/ueditor/php/upload/20121204/13546415049723.gif" style="float:none;" title="签名档-----13.gif" /></p><p><img src="/ueditor/php/upload/20121204/1354641505439.jpg" style="float:none;" title="签名档-----9.JPG" /></p><p><img src="/ueditor/php/upload/20121204/13546415058287.jpg" style="float:none;" title="你若安好便是晴天.jpg" /></p><p><br /></p>', '1354641547', 7, 0),
(27, '妹纸', '<p><img src="/ueditor/php/upload/20121204/13546415859613.jpg" style="float:none;" title="桌面背景-----3.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546415852460.jpg" style="float:none;" title="桌面背景-----2.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546415861375.jpg" style="float:none;" title="桌面背景-----0.jpg" /></p><p><br /></p>', '1354641606', 6, 0),
(28, '妹纸2', '<p><img src="/ueditor/php/upload/20121204/13546416437103.jpg" style="float:none;" title="桌面背景-----9.jpg" /></p><p><img src="/ueditor/php/upload/20121204/135464164322.jpg" style="float:none;" title="桌面背景-----4.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546416444913.jpg" style="float:none;" title="桌面背景-----11.jpg" /></p>', '1354641669', 1, 0),
(29, '大合集', '<p><img src="/ueditor/php/upload/20121204/13546417065982.jpg" style="float:none;" title="桌面背景-----10.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546417077118.jpg" style="float:none;" title="桌面背景-----13.jpg" /></p><p><img src="/ueditor/php/upload/20121204/1354641707246.jpg" style="float:none;" title="桌面背景-----17.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546417086014.jpg" style="float:none;" title="桌面背景-----20.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546417092709.jpg" style="float:none;" title="桌面背景-----18.jpg" /></p>', '1354641734', 1, 0),
(30, '合集', '<p><img src="/ueditor/php/upload/20121204/1354641777113.jpg" style="float:none;" title="桌面背景-----19.jpg" /></p><p><img src="/ueditor/php/upload/20121204/1354641778763.jpg" style="float:none;" title="桌面背景-----24.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546417785176.jpg" style="float:none;" title="桌面背景-----21.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546417797928.jpg" style="float:none;" title="桌面背景-----25.jpg" /></p>', '1354641812', 1, 0),
(31, '引用~', '<blockquote><p><span style="font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">优酷网以 “快者为王”为产品理念，注重用户体验，不断完善服务策略，其卓尔不群</span></p><p><span style="font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">的“快速播放，快速发布，快速搜索”的产品特性，充分满足用户日益增长的多元化互</span></p><p><span style="font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">动需求，使之成为中国</span><a target="_blank" href="http://baike.baidu.com/view/1557113.htm" style="color:#136ec2;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">视频网站</a><span style="font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">中的领军势力。优酷网现已成为互联网拍客聚集的</span></p><p><span style="font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">阵营。</span><a target="_blank" href="http://baike.baidu.com/view/2398.htm" style="color:#136ec2;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">美国</a><span style="font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">东部时间2010年12月8日，优酷网成功在</span><a target="_blank" href="http://baike.baidu.com/view/7708.htm" style="color:#136ec2;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">纽约</a><span style="font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">证券交易所正式挂牌上市</span></p><p><span style="font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">。2012年3月12日，优酷股份有限公司和土豆股份有限公司共同宣布双方于3月1</span><br /></p><p><span style="font-family:arial, 宋体, sans-serif;font-size:14px;line-height:25px;background-color:#ffffff;">。。。。</span></p></blockquote>', '1354676986', 9, 0),
(32, '离婚前规则', '<p><embed type="application/x-shockwave-flash" class="edui-faked-video" pluginspage="http://www.macromedia.com/go/getflashplayer" src="http://player.youku.com/player.php/sid/XNDgxMDM2MjQ4" width="520" height="400" align="none" wmode="transparent" play="true" loop="false" menu="false" allowscriptaccess="never" allowfullscreen="true" /></p><p><br /></p>', '1354677104', 8, 0),
(33, '演绎~蔡健雅~情歌', '<p><img src="/ueditor/php/upload/10651354677475.jpg" width="520" height="776" border="0" hspace="0" vspace="0" style="width:520px;height:776px;float:none;" /><br /></p>', '1354677530', 7, 0),
(34, '微电影《那女孩对我说》', '<p><embed type="application/x-shockwave-flash" class="edui-faked-video" pluginspage="http://www.macromedia.com/go/getflashplayer" src="http://player.youku.com/player.php/sid/XNDM0MTQyOTQ0" width="520" height="400" align="none" wmode="transparent" play="true" loop="false" menu="false" allowscriptaccess="never" allowfullscreen="true" /></p>', '1354677651', 6, 0),
(35, '蝙蝠侠前传三', '<p><embed type="application/x-shockwave-flash" class="edui-faked-video" pluginspage="http://www.macromedia.com/go/getflashplayer" src="http://player.youku.com/player.php/sid/XNDgwNzE4NzQw" width="520" height="400" align="none" wmode="transparent" play="true" loop="false" menu="false" allowscriptaccess="never" allowfullscreen="true" /></p>', '1354678176', 5, 0),
(36, '原点', '<p><embed type="application/x-shockwave-flash" class="edui-faked-video" pluginspage="http://www.macromedia.com/go/getflashplayer" src="http://player.youku.com/player.php/sid/XMjIxODAwNTY0" width="520" height="400" align="none" wmode="transparent" play="true" loop="false" menu="false" allowscriptaccess="never" allowfullscreen="true" /></p><p><br /></p>', '1354678560', 4, 0),
(37, '居家生活', '<p><img src="/ueditor/php/upload/20121205/13546787596984.jpg" style="float:none;" title="1635577959-4765628-528.jpg" /></p><p><img src="/ueditor/php/upload/20121205/13546787598233.jpg" style="float:none;" title="as.jpg" /></p><p><br /></p>', '1354678767', 3, 0),
(38, '家居服更好享受生活', '<p style="padding:0px 0px 8px;color:#444444;font-family:&#39;microsoft yahei&#39;, tahoma, arial, helvetica, stheiti;font-size:14px;line-height:21px;background-color:#fefefe;margin-top:0px;margin-bottom:0px;">在讲究品位与追求精神价值的时代，雪仙丽家居服关注大众生活质量与生活享受，坚持工作与生活分开的理念，产品风格上的变化更加强调与居住环境的协调。</p><p style="padding:0px 0px 8px;color:#444444;font-family:&#39;microsoft yahei&#39;, tahoma, arial, helvetica, stheiti;font-size:14px;line-height:21px;background-color:#fefefe;margin-top:0px;margin-bottom:0px;">　　在“家”这个特定的生活空间，让穿着者不但有视觉上的享受，更能收获心情的愉悦和精神的放松。<strong>亲情家居服专卖</strong>什么牌子的好，雪仙丽家居服的妩媚、时尚、休闲的设计常常能让人们在工作之外充分体验到生活的乐趣，无论是院落间的信庭漫步，还是厅堂之间的天伦之乐，无论是依窗远眺看晚霞渐隐还是享受置身万家灯火的体验，在这平凡的生活之间，处处都是体会诗意的乐趣。</p><p style="padding:0px 0px 8px;color:#444444;font-family:&#39;microsoft yahei&#39;, tahoma, arial, helvetica, stheiti;font-size:14px;line-height:21px;background-color:#fefefe;margin-top:0px;margin-bottom:0px;">　　雪仙丽家居服 更好的享受生活</p><p style="padding:0px 0px 8px;color:#444444;font-family:&#39;microsoft yahei&#39;, tahoma, arial, helvetica, stheiti;font-size:14px;line-height:21px;background-color:#fefefe;margin-top:0px;margin-bottom:0px;">　　雪仙丽家居服妩媚系列是品位高雅，懂得享受现代家居生活浪漫与情趣都市人的最爱，她们不仅有着可观的收入，而且还必须有较高的素质，<strong>亲情家居服专卖</strong>什么牌子的好，更重要的是他们充满了女人味。妩媚让家居生活的每一天都充满情趣、充满惊喜，让每一刻都充满了享受。</p><p style="padding:0px 0px 8px;color:#444444;font-family:&#39;microsoft yahei&#39;, tahoma, arial, helvetica, stheiti;font-size:14px;line-height:21px;background-color:#fefefe;margin-top:0px;margin-bottom:0px;">　　雪仙丽家居服时尚系列，赋予穿着者时尚与优雅的气质，让追求时尚的人们每时每刻享受与国际流行同步的优越与自信，展现出与众不同的非凡品位。一款胸前绣着当季最为流行的猫咪图案的雪仙丽家居服是温柔午后的最佳选择，在阳光透过薄薄窗纱的午后，穿着这一身时尚家居服，在典雅的欧美乡村音乐中，或呷一口红酒，或品位一杯咖啡，或读一本好书，欣赏一部好电影———就是这样享受生活，演绎高雅的都市生活方式。</p><p style="padding:0px 0px 8px;color:#444444;font-family:&#39;microsoft yahei&#39;, tahoma, arial, helvetica, stheiti;font-size:14px;line-height:21px;background-color:#fefefe;margin-top:0px;margin-bottom:0px;">　　如需了解更多请登录：http://www.nyimh.com</p><p><br /></p>', '1354678856', 1, 0),
(39, '雨霖铃~张信哲', '<p><embed type="application/x-shockwave-flash" class="edui-faked-video" pluginspage="http://www.macromedia.com/go/getflashplayer" src="http://player.youku.com/player.php/sid/XMTU4NTAxNjg=" width="520" height="400" align="none" wmode="transparent" play="true" loop="false" menu="false" allowscriptaccess="never" allowfullscreen="true" /></p>', '1354679018', 2, 0),
(40, '吃货吼吼吼', '<p><img src="/ueditor/php/upload/20121205/13546800228339.jpg" style="float:none;" title="63ce855ac6284d39e8ea827085294128.jpg" /></p><p><img src="/ueditor/php/upload/20121205/13546800224430.jpg" style="float:none;width:520px;height:358px;" title="552ed33b908ad3624211c3fbd95852b5.jpg" width="520" height="358" border="0" hspace="0" vspace="0" /></p><p><img src="/ueditor/php/upload/20121205/13546800221251.jpg" style="float:none;width:260px;height:300px;" title="679685dc9dfbbbdd62610955c4dc571c.jpg" width="260" height="300" border="0" hspace="0" vspace="0" /><img src="/ueditor/php/upload/20121205/13546800228399.jpg" title="06d6b9b9c033a41800a53d054eab55d7.jpg" width="260" height="300" border="0" hspace="0" vspace="0" style="float:none;width:260px;height:300px;" /></p><p><img src="/ueditor/php/upload/20121205/13546800239198.jpg" style="float:none;width:260px;height:300px;" title="6921701446295fdc83f65c76cd9acf55.jpg" width="260" height="300" border="0" hspace="0" vspace="0" /><img src="/ueditor/php/upload/20121205/13546800233594.jpg" title="cc54bc6ebe653c7974a98b4e842a777f.jpg" width="260" height="300" border="0" hspace="0" vspace="0" style="float:none;width:260px;height:300px;" /></p>', '1354680167', 6, 0),
(41, '王力宏', '<p><img src="/ueditor/php/upload/20121205/13546802877134.jpg" style="float:none;width:260px;height:347px;" title="18870b1d5df7e1d72ea258482a345f53.jpg" width="260" height="347" border="0" hspace="0" vspace="0" /><img src="/ueditor/php/upload/20121205/13546802878851.jpg" title="c4ed8fa918a6dd06caa8ecb60676cd94.jpg" width="260" height="347" border="0" hspace="0" vspace="0" style="float:none;width:260px;height:347px;" /></p>', '1354680354', 7, 0),
(42, '合合集3', '<p><img src="/ueditor/php/upload/20121205/13546806481162.jpg" style="float:none;" title="m_1251099108102.jpg" /></p><p><img src="/ueditor/php/upload/20121205/13546806483184.jpg" style="float:none;" title="1295091_201449027133_2.jpg" /></p><p><img src="/ueditor/php/upload/20121205/13546806484653.jpg" style="float:none;" title="2900048_120943018155_2.jpg" /></p><p><img src="/ueditor/php/upload/20121205/13546806493972.jpg" style="float:none;" title="leaf-1024-768.jpg" /></p><p><img src="/ueditor/php/upload/20121205/13546806494603.jpg" style="float:none;" title="4f339c9a59280.jpg" /></p><p><img src="/ueditor/php/upload/20121205/13546806491395.jpg" style="float:none;" title="2007921161214891_2.jpg" /></p><p><img src="/ueditor/php/upload/20121205/1354680650350.jpg" style="float:none;" title="2007921164214906_2.jpg" /></p><p><img src="/ueditor/php/upload/20121205/13546806503072.jpg" style="float:none;" title="2012021061226329.jpg" /></p>', '1354680658', 1, 0),
(43, '合集', '<div>哈哈</div><div>转载自<a href=''../User/visitBlog/uid/1''>渣渣<a/></div><p><img src="/ueditor/php/upload/20121204/1354641777113.jpg" style="float:none;" title="桌面背景-----19.jpg" /></p><p><img src="/ueditor/php/upload/20121204/1354641778763.jpg" style="float:none;" title="桌面背景-----24.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546417785176.jpg" style="float:none;" title="桌面背景-----21.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546417797928.jpg" style="float:none;" title="桌面背景-----25.jpg" /></p>', '1354689087', 2, 0),
(44, '视频', '<p><embed type="application/x-shockwave-flash" class="edui-faked-video" pluginspage="http://www.macromedia.com/go/getflashplayer" src="http://player.youku.com/player.php/sid/XNDg0MTE1MjQ0?f=18637564" width="520" height="300" align="none" wmode="transparent" play="true" loop="false" menu="false" allowscriptaccess="never" allowfullscreen="true" /></p>', '1354690120', 2, 0),
(45, '爱上', '<p><img src="/ueditor/php/upload/20121205/13546901684661.jpg" title="2012021061226329.jpg" /><br /></p>', '1354690175', 2, 0),
(46, '合集', '<div>数</div><div>转载自<a href=''../User/visitBlog/uid/1''>渣渣<a/></div><p><img src="/ueditor/php/upload/20121204/1354641777113.jpg" style="float:none;" title="桌面背景-----19.jpg" /></p><p><img src="/ueditor/php/upload/20121204/1354641778763.jpg" style="float:none;" title="桌面背景-----24.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546417785176.jpg" style="float:none;" title="桌面背景-----21.jpg" /></p><p><img src="/ueditor/php/upload/20121204/13546417797928.jpg" style="float:none;" title="桌面背景-----25.jpg" /></p>', '1354690211', 2, 0),
(47, '撒旦', '<p><embed type="application/x-shockwave-flash" class="edui-faked-video" pluginspage="http://www.macromedia.com/go/getflashplayer" src="http://player.youku.com/player.php/sid/XNDg0MTE1MjQ0?f=18637564" width="520" height="300" align="none" wmode="transparent" play="true" loop="false" menu="false" allowscriptaccess="never" allowfullscreen="true" /></p><p><br /></p>', '1354690390', 2, 0),
(48, 'baidu ', '<p><embed type="application/x-shockwave-flash" class="edui-faked-video" pluginspage="http://www.macromedia.com/go/getflashplayer" src="http://player.youku.com/player.php/sid/XNDg0MTE1MjQ0?f=18637564" width="520" height="400" align="none" wmode="transparent" play="true" loop="false" menu="false" allowscriptaccess="never" allowfullscreen="true" /></p><p><br /></p>', '1354707768', 2, 0);

-- --------------------------------------------------------

--
-- 表的结构 `attach`
--

CREATE TABLE IF NOT EXISTS `attach` (
  `atid` int(10) NOT NULL AUTO_INCREMENT,
  `aid` int(10) NOT NULL,
  `tag` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`atid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=123 ;

--
-- 转存表中的数据 `attach`
--

INSERT INTO `attach` (`atid`, `aid`, `tag`) VALUES
(1, 1, '电影'),
(2, 1, '动画'),
(3, 1, '冰河世纪'),
(4, 2, '动漫'),
(5, 2, '热血'),
(6, 2, '火影'),
(7, 2, '日本'),
(8, 3, '宇智波'),
(9, 3, '鼬'),
(10, 3, '佐助'),
(11, 3, '动漫'),
(12, 4, '运动'),
(13, 4, '夕阳'),
(14, 4, '摄影'),
(15, 5, '摄影'),
(16, 5, '黑白'),
(17, 5, '性感'),
(18, 6, '南京'),
(19, 6, '哪个'),
(20, 6, '大学'),
(21, 7, '雪景'),
(22, 7, '木中'),
(23, 8, '摄影'),
(24, 8, '苏州'),
(25, 8, '杭州'),
(26, 9, '台湾'),
(27, 9, '电视剧'),
(28, 9, '雪'),
(29, 10, '突突'),
(30, 10, '斯基'),
(31, 11, '娇羞'),
(32, 11, '低头'),
(33, 12, '鸭纸'),
(34, 12, '哒哒'),
(35, 13, '突突'),
(36, 13, '丫丫'),
(37, 14, 'B'),
(38, 14, '哥'),
(39, 15, '卖萌'),
(40, 15, '喵'),
(41, 16, '小戴'),
(42, 16, '老师'),
(43, 16, '木中'),
(44, 17, '猥琐'),
(45, 17, '大学'),
(46, 19, '南京'),
(47, 19, '哪个'),
(48, 19, '大学'),
(49, 20, '日本'),
(50, 20, '动漫'),
(51, 21, '摄影'),
(52, 21, '二逼欢乐多'),
(53, 22, '萌'),
(54, 22, '萌萌'),
(55, 22, '萌萌萌'),
(56, 23, '沈佳仪'),
(57, 23, '那些年'),
(58, 23, '台湾'),
(59, 24, '喵'),
(60, 25, '卖'),
(61, 25, '萌'),
(62, 26, '仙剑'),
(63, 26, '签名'),
(64, 27, '妹纸'),
(65, 27, '妹纸纸'),
(66, 28, '汤唯'),
(67, 28, 'Saber'),
(68, 29, '桌面背景'),
(69, 29, '音乐'),
(70, 29, '阿兰'),
(71, 29, '动漫'),
(72, 30, '动画'),
(73, 30, '文艺'),
(74, 30, '摄影'),
(75, 30, '火影'),
(76, 30, '口袋妖怪'),
(77, 31, '引用'),
(78, 32, '婚姻'),
(79, 32, '大陆'),
(80, 32, '言情'),
(81, 33, '蔡健雅'),
(82, 33, '电影'),
(83, 33, '唐嫣'),
(84, 34, '微电影'),
(85, 34, '爱情'),
(86, 34, '校园'),
(87, 35, '蝙蝠侠'),
(88, 35, '电影'),
(89, 35, '诺兰'),
(90, 36, '孙燕姿'),
(91, 36, '音乐'),
(92, 36, '蔡健雅'),
(93, 37, '家居'),
(94, 38, '家居'),
(95, 38, '生活'),
(96, 38, '服饰'),
(97, 39, '张信哲'),
(98, 39, '音乐'),
(99, 40, '吃货'),
(100, 40, '美食'),
(101, 40, '口水'),
(102, 41, '音乐'),
(103, 41, '王力宏'),
(104, 42, '图片'),
(105, 42, '摄影'),
(106, 42, '壁纸'),
(107, 43, '动画'),
(108, 43, '文艺'),
(109, 43, '摄影'),
(110, 43, '火影'),
(111, 43, '口袋妖怪'),
(112, 44, '视频'),
(113, 45, '爱上'),
(114, 46, '动画'),
(115, 46, '文艺'),
(116, 46, '摄影'),
(117, 46, '火影'),
(118, 46, '口袋妖怪'),
(119, 47, '撒旦'),
(120, 47, '撒旦大'),
(121, 47, '撒旦啊啊'),
(122, 48, 'asd');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `aid` int(10) NOT NULL,
  `content` varchar(400) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `time` varchar(40) COLLATE gb2312_bin NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 COLLATE=gb2312_bin AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`cid`, `uid`, `aid`, `content`, `time`) VALUES
(1, 2, 30, '哇哦~', '1354674091'),
(2, 1, 30, '@Lucy:哈哈', '1354674164'),
(3, 2, 30, '@Lucy:erer', '1354689053');

-- --------------------------------------------------------

--
-- 表的结构 `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `uid1` int(10) NOT NULL,
  `uid2` int(10) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `follow`
--

INSERT INTO `follow` (`fid`, `uid1`, `uid2`) VALUES
(1, 1, 10),
(2, 1, 6),
(3, 1, 2),
(4, 2, 1),
(5, 2, 7),
(7, 2, 4),
(8, 2, 9);

-- --------------------------------------------------------

--
-- 表的结构 `likearticle`
--

CREATE TABLE IF NOT EXISTS `likearticle` (
  `laid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `aid` int(10) NOT NULL,
  PRIMARY KEY (`laid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `likearticle`
--

INSERT INTO `likearticle` (`laid`, `uid`, `aid`) VALUES
(1, 2, 30),
(2, 2, 29),
(3, 2, 28),
(4, 2, 20),
(5, 2, 38),
(6, 2, 37),
(10, 2, 41);

-- --------------------------------------------------------

--
-- 表的结构 `liketag`
--

CREATE TABLE IF NOT EXISTS `liketag` (
  `ltid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `tag` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ltid`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 COLLATE=gb2312_bin AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `liketag`
--

INSERT INTO `liketag` (`ltid`, `uid`, `tag`) VALUES
(1, 1, '斯基'),
(2, 1, '运动'),
(3, 1, '妹纸'),
(4, 1, '雪景'),
(5, 1, '佐助'),
(6, 1, '沈佳仪'),
(7, 2, 'Saber'),
(8, 2, '鸭纸'),
(9, 2, '黑白'),
(10, 2, 'B'),
(11, 2, '生活'),
(12, 2, '孙燕姿'),
(14, 2, '爱上'),
(19, 2, '蝙蝠侠'),
(20, 2, '大学'),
(21, 2, '王力宏'),
(22, 2, '苏州'),
(23, 2, '电影'),
(25, 2, '雪景');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `content` varchar(300) COLLATE utf8_bin NOT NULL,
  `time` varchar(40) COLLATE utf8_bin NOT NULL,
  `href` varchar(80) COLLATE utf8_bin NOT NULL,
  `readed` int(10) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`mid`, `uid`, `content`, `time`, `href`, `readed`) VALUES
(1, 10, '渣渣关注了你的博客', '1354641863', '__URL__/../User/visitBlog/uid/1', 0),
(2, 6, '渣渣关注了你的博客', '1354641864', '__URL__/../User/visitBlog/uid/1', 0),
(3, 2, '渣渣关注了你的博客', '1354641865', '__URL__/../User/visitBlog/uid/1', 1),
(4, 1, 'Lucy关注了你的博客', '1354674073', '__URL__/../User/visitBlog/uid/2', 0),
(5, 1, 'Lucy在你的文章中回复了你', '1354674092', '__URL__/../User/visitArticle/aid/30', 0),
(6, 2, '渣渣在文章中提到了了你', '1354674165', '__URL__/../User/visitArticle/aid/30', 1),
(7, 7, 'Lucy关注了你的博客', '1354674209', '__URL__/../User/visitBlog/uid/2', 0),
(8, 3, 'Lucy关注了你的博客', '1354679066', '__URL__/../User/visitBlog/uid/2', 0),
(9, 4, 'Lucy关注了你的博客', '1354679212', '__URL__/../User/visitBlog/uid/2', 0),
(10, 9, 'Lucy关注了你的博客', '1354679213', '__URL__/../User/visitBlog/uid/2', 0),
(11, 6, 'Lucy关注了你的博客', '1354690269', '__URL__/../User/visitBlog/uid/2', 0),
(12, 6, 'Lucy取消关注了你的博客', '1354690270', '__URL__/../User/visitBlog/uid/2', 0),
(13, 3, 'Lucy取消关注了你的博客', '1354690271', '__URL__/../User/visitBlog/uid/2', 0),
(14, 10, 'Lucy关注了你的博客', '1354690425', '__URL__/../User/visitBlog/uid/2', 0),
(15, 10, 'Lucy取消关注了你的博客', '1354690426', '__URL__/../User/visitBlog/uid/2', 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nickname` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `time` varchar(40) NOT NULL,
  `avatar` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `email`, `password`, `nickname`, `time`, `avatar`) VALUES
(1, '1@qq.com', '1', '渣渣', '1352711333', '/Public/img/avatar/1.jpg'),
(2, '2@qq.com', '1', 'Lucy', '1352772568', '/Public/upload/50beef12556fe.jpg'),
(3, '3@qq.com', '1', '王小明', '1111111111', '/Public/img/avatar/2.jpg'),
(4, '4@qq.com', '1', 'Tom', '1111111111', '/Public/img/avatar/3.jpg'),
(5, '5@qq.com', '1', '李狗蛋', '1354435082', '/Public/img/avatar/4.jpg'),
(6, '6@qq.com', '1', '李二狗', '1354457145', '/Public/img/avatar/5.jpg'),
(7, '7@qq.com', '1', '张三', '1354457375', '/Public/img/avatar/6.jpg'),
(8, '8@qq.com', '1', '化生', '1354457435', '/Public/img/avatar/5.jpg'),
(9, '9@qq.com', '1', '汪汪汪', '1354457884', '/Public/img/avatar/2.jpg'),
(10, '10@qq.com', '1', '喵', '1354457924', '/Public/img/avatar/4.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
