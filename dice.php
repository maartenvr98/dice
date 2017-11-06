<? for($i=0,$r=rand(1,30);$i<=$r;$i++){$l=g(($l)?$l:0,rand(1,6));echo"$l ";}function g($l,$a){return($l==$a)?g($l,rand(1,6)):$a;}echo"Trew: $l";
