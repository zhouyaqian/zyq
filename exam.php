<?php
header("Content:text/html;charset=utf8");
require_once('fpdf/fpdf.php');
$json = '[{"ztk_id":"40","0":"40","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"1-1","6":"1-1","question_image":"img/title/5/105_2012_1-1.png","7":"img/title/5/105_2012_1-1.png","isparent_id":"1","8":"1"},{"ztk_id":"41","0":"41","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"1-2","6":"1-2","question_image":"img/title/5/105_2012_1-2.png","7":"img/title/5/105_2012_1-2.png","isparent_id":"1","8":"1"},{"ztk_id":"42","0":"42","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"1-3","6":"1-3","question_image":"img/title/5/105_2012_1-3.png","7":"img/title/5/105_2012_1-3.png","isparent_id":"1","8":"1"},{"ztk_id":"43","0":"43","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"1-4","6":"1-4","question_image":"img/title/5/105_2012_1-4.png","7":"img/title/5/105_2012_1-4.png","isparent_id":"1","8":"1"},{"ztk_id":"44","0":"44","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"1-5","6":"1-5","question_image":"img/title/5/105_2012_1-5.png","7":"img/title/5/105_2012_1-5.png","isparent_id":"1","8":"1"},{"ztk_id":"45","0":"45","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"2-1","6":"2-1","question_image":"img/title/5/105_2012_2-1.png","7":"img/title/5/105_2012_2-1.png","isparent_id":"2","8":"2"},{"ztk_id":"46","0":"46","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"2-2","6":"2-2","question_image":"img/title/5/105_2012_2-2.png","7":"img/title/5/105_2012_2-2.png","isparent_id":"2","8":"2"},{"ztk_id":"47","0":"47","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"2-3","6":"2-3","question_image":"img/title/5/105_2012_2-3.png","7":"img/title/5/105_2012_2-3.png","isparent_id":"2","8":"2"},{"ztk_id":"48","0":"48","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"2-4","6":"2-4","question_image":"img/title/5/105_2012_2-4.png","7":"img/title/5/105_2012_2-4.png","isparent_id":"2","8":"2"},{"ztk_id":"49","0":"49","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"2-5","6":"2-5","question_image":"img/title/5/105_2012_2-5.png","7":"img/title/5/105_2012_2-5.png","isparent_id":"2","8":"2"},{"ztk_id":"50","0":"50","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"2-6","6":"2-6","question_image":"img/title/5/105_2012_2-6.png","7":"img/title/5/105_2012_2-6.png","isparent_id":"2","8":"2"},{"ztk_id":"51","0":"51","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"2-7","6":"2-7","question_image":"img/title/5/105_2012_2-7.png","7":"img/title/5/105_2012_2-7.png","isparent_id":"2","8":"2"},{"ztk_id":"52","0":"52","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"2-8","6":"2-8","question_image":"img/title/5/105_2012_2-8.png","7":"img/title/5/105_2012_2-8.png","isparent_id":"2","8":"2"},{"ztk_id":"53","0":"53","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"3","6":"3","question_image":"img/title/5/105_2012_3.png","7":"img/title/5/105_2012_3.png","isparent_id":"0","8":"0"},{"ztk_id":"54","0":"54","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"4","6":"4","question_image":"img/title/5/105_2012_4.png","7":"img/title/5/105_2012_4.png","isparent_id":"0","8":"0"},{"ztk_id":"55","0":"55","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"5","6":"5","question_image":"img/title/5/105_2012_5.png","7":"img/title/5/105_2012_5.png","isparent_id":"0","8":"0"},{"ztk_id":"56","0":"56","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"6","6":"6","question_image":"img/title/5/105_2012_6.png","7":"img/title/5/105_2012_6.png","isparent_id":"0","8":"0"},{"ztk_id":"57","0":"57","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"7","6":"7","question_image":"img/title/5/105_2012_7.png","7":"img/title/5/105_2012_7.png","isparent_id":"0","8":"0"},{"ztk_id":"58","0":"58","master_id":"a","1":"a","course_id":"5","2":"5","university_id":"105","3":"105","years":"2012","4":"2012","test_subject_code":"830","5":"830","question_number":"8","6":"8","question_image":"img/title/5/105_2012_8.png","7":"img/title/5/105_2012_8.png","isparent_id":"0","8":"0"}]';




exam($json);
/*
stdClass Object
(
    [ztk_id] => 24
    [0] => 24
    [course_id] => 10
    [1] => 10
    [university_id] => 344
    [2] => 344
    [years] => 2017
    [3] => 2017
    [question_number] => 9
    [4] => 9
    [question_image] => img/title/10/344_2017_9.jpg
    [5] => img/title/10/344_2017_9.jpg
)
 */
/**
 * A4 3480*3508
 * 各边距离：上 223 下 368 左 208 右 229
 * @param  [type] $imgs json格式数据('[{},{}]')
 * @return [type]       [description]
 */
function exam($imgs){
    $imgs = json_decode($imgs, true);//将json数据转化成PHP数组格式
    $source = array();
    $total = 0; //计算当前页面所放图片的总高度
    $page = 0; //当前为第几页
    $height[$page] = 0; //存放一页多出来的空白，平均给每个题目
    $length = count($imgs); //$length为多少就有多少页
    // var_dump($imgs);exit;
    //拼接二维码路径
    $path = dirname($imgs[0]['question_image']);
    $path = str_replace('title', 'qrcode', $path);
    $path = $path.'/'.$imgs[0]['university_id'].'/'.$imgs[0]['years'];
    foreach($imgs as $k => $v) {
        $source[$page][$k]['source'] = Imagecreatefrompng($v['question_image']);
        $source[$page][$k]['question_number'] = $v['question_number'];
        $source[$page][$k]['size'] = getimagesize($v['question_image']);
        //计算当前要处理的数组中题目的总高度（大图不足300填充）
        if($source[$page][$k]['size'][1] < 300 && !strpos($v['question_number'],'-')){
            $h = 300 + 5; //5个像素的间隔
            $total = $total + $h; 
        }else{
            $h = $source[$page][$k]['size'][1] + 5;
            $total += $h;  
        }
        

        //$pHeight = 3508-233-368-520(233头部，368尾部，520的标题显示，剩余为题目部分) 
        if($page == 0){
            $pHeight = 2387; 
        }else{
            $pHeight = 2907;
        }
        
        if($total > $pHeight){
        //如果总高度超过了A4的高度，则弹出数组中的最后一个题目           
        //将超过的题目放到下个数组中（下一张A4）
            $total = $total - $h; 
            array_pop($source[$page]);
            //将剩余空白处平均分配（除去第一个题目）
            $n = count($source[$page]);
            // echo $total.'<br>';
            
            $height[$page] = (float)(2517-$total)/$n;
            $page++; 
            $total = 0; // 重新计数当前总高度
            $source[$page][$k]['source'] = Imagecreatefrompng($v['question_image']);
            $source[$page][$k]['question_number'] = $v['question_number'];
            $source[$page][$k]['size'] = getimagesize($v['question_image']);
            //计算当前要处理的数组中题目的总高度
            if($source[$page][$k]['size'][1] < 300){
                $h = 300 - $source[$page][$k]['size'][1];
                $total = $total + $h + $source[$page][$k]['size'][1]; 
            }else{
                $total += $source[$page][$k]['size'][1]; 
            }
            $height[$page] = 0;
            
        }
    }
    // var_dump($tmpy);exit;
    $length = count($source);
    $university = '东北大学';//imgs[0]['university_id']
    // $university = mb_convert_encoding($university,'gb2312', 'utf8');
    $major = '通信工程'; //imgs[0]['course_id']
    $years = '2017';    //imgs[0]['years']
    $name = $university.$years;
    $new_name = mb_convert_encoding($name,'gb2312', 'utf8');
    $new_major = mb_convert_encoding($major,'gb2312', 'utf8');
    $font = "C:/Windows/Fonts/simkai.ttf";
    $page = 0;
    for ($j = 0; $j < $length; $j++) {
        $page++;
        $target  = 'bg.jpg'; //背景图片
        $target_img = Imagecreatefromjpeg($target);
        if($j == 0){
            $font_size = 100;
            //设置字体颜色
            $color = imagecolorallocate($target_img,0,0,0);
            //标题（学校名称和年份,下一行为专业）
            $width = imagefontwidth($font_size);
            $width = strlen($new_major) * $width;
            $x = (float)(1500-$width)/2; //调整标题的x坐标
            imagettftext($target_img, $font_size, 0, $x+208, 350, $color,$font, $major);
            $width = imagefontwidth($font_size);
            $width = strlen($new_name) * $width;
            $x = (float)(1500-$width)/2; //调整标题的x坐标
            imagettftext($target_img, $font_size, 0, $x+208, 470, $color,$font, $name);
        }
        
        
        $tmp  = 223;    //图片x坐标
        if($j == 0){
            $tmpy = 520; //图片y坐标
        }else{
            $tmpy = 233; //图片y坐标
        }
        
        foreach($source[$j] as $k => $v){
            //拼接图片
            if($v['size'][0] < 2043*0.9){
                 imagecopyresampled($target_img, $v['source'], $tmp, $tmpy, 0, 0, $v['size'][0], $v['size'][1], $v['size'][0], $v['size'][1]);
            }else{
                
                imagecopyresampled($target_img, $v['source'], $tmp, $tmpy, 0, 0, 2043*0.9, $v['size'][1], $v['size'][0], $v['size'][1]);
             }
            

            $tmp = $tmp + $v['size'][0];//x坐标再加上题目显示的宽度
            $tmp = $tmp + 5;

            //判断如果为大题则只显示一个二维码
            $preg = strpos($v['question_number'],'-');
            $sub = substr($v['question_number'], 2, 1);
            if(!($preg && $sub != '1')){
                $file = $path.'/'.$v['question_number'].'.png';
                // echo $file;exit;
                $code['source'] = Imagecreatefrompng($file);
                $code['size'] = getimagesize($file);
                //拼接二维码，第三四个参数分别表示距离左上角的xy坐标
                imagecopy($target_img, $code['source'], 2480-280-$code['size'][0], $tmpy+150, 0, 0, $code['size'][0], $code['size'][1]);
            }
            //如果题目的高度少于三百，则补空白(只有大题才填充)
            $y = 0;
            if($v['size'][1] < 300 && !strpos($v['question_number'],'-')){
                $y = 300 - $v['size'][1];
            }
            
            $tmpy = $tmpy + $v['size'][1] + $y;
            $tmpy = $tmpy + 5 + $height[$j]; //height[$j]为剩下的空白处平均分配到每个题目
            $tmp = 223;
            // echo $v['size'][1].'<br>';
            // echo 'tmpy:'.$tmpy.'<br>';
            
        }
        // var_dump($height);exit;
        $mark['source'] = Imagecreatefrompng('shuiyin.png');
        $mark['size'] = getimagesize('shuiyin.png');
        // 添加‘小黄书考研’水印
        imagecopy($target_img, $mark['source'], 300, 700 ,0, 0, $mark['size'][0], $mark['size'][1]);
        //在A4的右下角加上当前的页码
        imagettftext($target_img, 50, 0, 2400, 3400, $color,$font , $page);
        
        $black = imagecolorallocate($target_img,0,0,0);
        imagecolortransparent($target_img,$black);

        //最后生成的图片
        Imagejpeg($target_img, $new_name.'-'.$page.'.jpg');
    }
    $pdf = new FPDF();
    for($i = 1;$i < $length+1; $i++){
        
        $pdf->AddPage();    
        $pdf->SetMargins(0, 0);
        $pdf->image($new_name.'-'.$i.'.jpg',0,0,212);
        
    }
    //将生成的PDF文件保存在当前文件下（命名为学校+年份）
    $pdf->Output('F',$new_name.'.pdf');

}


?>