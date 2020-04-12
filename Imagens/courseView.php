<?php include_once("header.php"); 
$actualDate= date("Y/m/d");
$nextCourse = "";

if($_GET["id"]==0){
  $hasNextCourse= "Próximo Curso:";
  $idNextCourse= nextCourse($conexao,$actualDate);
  $course = getCourse($conexao, $idNextCourse['id']);
}else{
  $course = getCourse($conexao, $_GET["id"]);
}
$nextCourseList = getNextCourses($conexao, $actualDate);
$onlineCourseList = getOnlineCourses($conexao);
$pastCourseList = getPastCourses($conexao, $actualDate);

?>
<div class="container" style="width: 100% !important">    
  <div class="course-menu-div">
    <h2 style="color:white; font-family:'Source Sans Pro', sans-serif;">Calendário de 2019</h2>
    <ul class="course-menu">
      <?php if(sizeof($nextCourseList)>0):?>
        <li class="course-menu-title">Próximos Cursos
          <?php foreach ($nextCourseList as $nextCourse): {?>
            <li class="course-menu-option">
              <a href="courseView.php?id=<?=$nextCourse["id"]?>"><?= date('d/m', strtotime($nextCourse["date"]))?> <span style="margin-left:5px;"><?=substr(mb_strtoupper($nextCourse["title"]),0, 29)?><?php if(strlen($nextCourse["title"])>25)?>...</span></a>
            </li>
          <?php } endforeach ?>
        </li>
      <?php endif ?>
      <?php if(sizeof($onlineCourseList) > 0):{?>
        <li class="course-menu-title">Cursos Online
           <?php foreach ($onlineCourseList as $nextCourse): {?>
            <li class="course-menu-option">
              <a href="courseView.php?id=<?=$nextCourse["id"]?>"><?=substr(mb_strtoupper($nextCourse["title"]),0, 29)?></a>
            </li>
          <?php } endforeach ?> 
        </li>
      <?php } endif?>
      <?php if(sizeof($pastCourseList)>0):?>
        <li class="course-menu-title">Cursos realizados
          <?php foreach ($pastCourseList as $pastCourse): {?>
            <li class="course-menu-option">
              <a href="courseView.php?id=<?=$pastCourse['id']?>"><?= date('d/m', strtotime($pastCourse["date"]))?> <span style="margin-left:5px;"><?=substr(mb_strtoupper($pastCourse["title"]),0, 29)?><?php if(strlen($pastCourse["title"])>25) echo "...";?></span></a></td>
              </li>
            <?php } endforeach ?>
          </li>
        <?php endif?>
      </ul>
    </div>
    <div class="course-main">
      <h2 class="course-title"><?= $course["title"] ?></h2>
      <hr class="mb-5 clear-fix">
      <div class="course content">
        <div class="course-info">
          <?php if($course["online"]==false):?>
              <p>Data:
                <?php if($course["end_date"]!=='0000-00-00' && $course["end_date"]!= NULL){
                  echo " ".date("d", strtotime($course["date"]))." e ".date('d/m/Y', strtotime($course["end_date"]));
                }
                else{
                  echo date("d/m/Y", strtotime($course["date"]));
                }?>
              </p>
              <p>Endereço: <spam class="adress"><?= $course["local"] ?></spam></p>
              <p>Horário: <spam class="time">09 ás 18 horas</spam></p>
          <?php else: ?>
            <p>Curso online</p>
          <?php endif?>
      </div> 
      <div class="course target-public">
        <h4 class="target-public-title">Público alvo</h4> 
        <div class="target-public-text"><?= nl2br($course["target_public"]) ?></div>
      </div>
      <div class="course objective">
        <h4 class="objective-title">Objetivo</h4>
        <div class="objective-text"><p><?=nl2br($course["objective"]) ?></p></div>
      </div> 
    </div>
    <div class="course professor">
      <h4 class="professor-title">Professor(a)</h4>
      <p class="professor-name"><?= $course["professor_name"]; ?></p>
      <p class="professor-curriculum"> <?= nl2br($course["professor_curriculo"]) ?></p>
    </div>
    <div class="course program">
      <h4 class="program-title">O Programa</h4>
      <div class="program-text"><p><?= nl2br($course["program"])?></p></div>
      <!--       <ol class="program-list">
              <li><?= $course["program"] ?>
              </li>
            </ol>
          -->    </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("footer.php");?>