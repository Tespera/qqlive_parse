<?php
    //$dirname 缓存目录
    $dirname = 'E:\c20f642d81ddd17f10eec8911f3971cb\vodcache';
    if(is_dir($dirname)){
            $res = opendir($dirname);
            while (false !== ($file = readdir($res))) {
                    if($file!='.' && $file!='..' && $file){
                        echo  $cmd = "cd $dirname/$file && copy/b *.tdl $file.mp4 && move $file.mp4 ../".PHP_EOL;
                        exec($cmd);
                    }
            }
    }

