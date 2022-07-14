

<?php



    if (isset($_POST['a'])) {
        
            $reponse= new stdClass();
            $racine=0;
            $delta = 0;
            $r1=0;
            $r2=0;
            $lambda=0;
            $mu=0;

            
            $delta= ($_POST['a']*$_POST['a'])+(4*$_POST['b']);
            //racine delta
            if ($delta>0){
            $racine= sqrt($delta);
            
            //racine r1 et r2
            $r1= round(($_POST['a']-$racine)/2,3);
            $r2= round(($_POST['a']+$racine)/2,3);
            
            //lambda et mu
            $lambda= round((($_POST['u1']-($r2*$_POST['u0']))/($r1-$r2)),3);
            $mu= round(($_POST['u1']-($r1*$_POST['u0']))/($r2-$r1),3);
            

            //fonction
            $variable= "U_n= ($lambda) . ($r1)^n + ($mu) . ($r2)^n";}
            
            elseif($delta==0){

                $r1= round(($_POST['a'])/2,3);

                $lambda= round($_POST['u0'],3);
                $mu= round(($_POST['u1']-$r1*$_POST['u0'])/$r1,3);
                $variable= " U_n= ($lambda) . $r1^n + ($mu) .n . $r1^n ";
            }
            else{
                
                $racine= sqrt(-($delta));
                $x= ($_POST['a']/2);  //partie réelle
                $y= ($racine)/2;       //partie imaginaire

                $r= round(sqrt(($x*$x)+($y*$y)),3);
                $arg= atan($y/$x);
                $angle= round($arg*(180/M_PI),3);

                //$variable= "$argument";
                $lambda= round($_POST['u0'],3);
                $mu= round(($_POST['u1']-($r*$_POST['u0']*cos($angle)))/($r*sin($angle)),3) ;

                //fonction
                $variable= "U_n= ($lambda) * ($r)^n * cos(n*$angle) + ($mu) * ($r)^n * sin(n*$angle)";
                
            }

            $reponse -> result= $variable;
            echo(json_encode($reponse));

        }
   

?>  
