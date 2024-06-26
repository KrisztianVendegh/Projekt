<?php
include_once('partials/header.php');
?>
    <div class="page">
        <div class="row">
            <div class="alt">
            
            
            <div class="info-container">
                <div class="info-box">
                   
                    <h2>Motor:</h2>
                    <p>Porsche 911 GT3 RS je poháňaný výkonným motorom s vysokým výkonom.<br>
                    Väčšina modelov GT3 RS má atmosféricky plnený motor s vysokým otáčkomerom,<br>
                    čo znamená, že dosahuje vysoké otáčky na minútu (RPM) a poskytuje výbornú odozvu motora.</p>
                </div>
        
                <div class="info-box">
                    
                    <h2>Výkon: </h2>
                    <p>Výkonnosť je jedným z hlavných prvkov príťažlivosti tohto modelu.<br>
                        GT3 RS poskytuje výbornú dynamiku a zrýchlenie, čo je ideálne pre nadšencov športových áut.</p>
                </div>
                <div class="info-box">
                    
                    <h2>Prevodovka: </h2>
                    <p>Často je k dispozícii s manuálnou alebo automatickou prevodovkou, <br>
                        pričom manuálna prevodovka poskytuje zážitok z riadenia pre tých, ktorí si vychutnávajú aktívne ovládanie automobilu.</p>
                </div>
                <div class="info-box">
                    
                    <h2>Športové podvozok: </h2>
                    <p>GT3 RS je vybavený športovým podvozkom, ktorý umožňuje presné riadenie a skvelú ovládateľnosť.<br>
                        Nízka výška a špeciálne ladený podvozok prispievajú k vynikajúcej stabilita a ovládateľnosti v zákrutách.</p>
                </div>
                <div class="info-box">
                    
                    <h2>Exteriér a Design: </h2>
                    <p>Exteriérový dizajn modelu GT3 RS často zahŕňa agresívne a športové prvky,<br>
                         ako sú väčšie nárazníky, aerodynamické prvky a charakteristický zadný krídlo.</p>
                </div>
                <div class="info-box">
                    
                    <h2>Interiér: </h2>
                    <p>Vnútro GT3 RS je zamerané na športový zážitok. Často je vybavené športovými sedadlami,<br> výraznými meradlami a kvalitnými materiálmi.</p>
                </div>
                <div class="info-box">
                    
                    <h2>Špecifikácie a Výbava: </h2>
                    <p>Každý ročník a model môže mať niektoré špecifikácie a výbavu, ktoré sa môžu líšiť.<br> 
                        Patrí sem napríklad systém riadenia stability, pokročilý infotainment a ďalšie moderné technológie.</p>
                </div>
                <div class="info-box">
                    
                    <h2>Cena: </h2>
                    <p>Porsche 911 GT3 RS je obvykle na vyššej cenovej úrovni, zohľadňujúc jeho vysoký výkon a športové vlastnosti.</p>
                </div>
</div>
        <div class="infopagebutton">
            <a href="index.php" class="btn">&#8592; Hlavna Stranka</a>
            <a href="motor.php" class="btn">Motor &#8594;</a>
        </div>
            </div>
            <div class="col-2">
            <img src="../img/pic2.png" width="650px">
            </div>
           
   </div>
   </div>
        <?php
         $tabla_object = new Tabla();
         $tabla = $tabla_object->selecttab();
         echo'<section class="p-5 mt-5">';
         echo '<table>';
         echo '<tr>
                     <th>Atribut</th>
                     <th>Hodnota</th>
     
     
                 </tr>';
         foreach($tabla as $c){
     
             echo '<tr>';
             echo '<td>'.$c->atribut;'</td>';
             echo '<td>'.$c->hodnota;'</td>';
     
             echo '</tr>';
         }
     
         echo '</table>';
     
         echo'  </section>';
               
               
             
include_once('partials/footer.php');
?>