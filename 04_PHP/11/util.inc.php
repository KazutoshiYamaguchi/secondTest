<?php

function h($string){
    return htmlspecialchars($string);
}

function getWareki($seireki){
    
    if(!is_numeric($seireki)|| $seireki<1868 ||$seireki===''){
        
        return "未対応";
    }
    elseif($seireki<1912){
        $year=$seireki-1868+1;
        if($year===1){
            return '明治元年です';
        }else{
            return '明治'.$year.'年';
        }

    }elseif($seireki<1926){
        $year=$seireki-1912+1;
        if($year===1){
            return '大正元年';
        }else{
            return '大正'.$year.'年';
        }

    }elseif($seireki<1989){
        $year=$seireki-1926+1;
        if($year===1){
            return '昭和元年';
        }else{
            return '昭和'.$year.'年';
        }

    }elseif($seireki<2019){
        $year=$seireki-1989+1;
        if($year===1){
            return '平成元年';
        }else{
            return '平成'.$year.'年';
        }

    }else{
        $year=$seireki-2019+1;
        if($year===1){
            return '令和元年';
        }else{
            return '令和'.$year.'年';
        }
    }
}