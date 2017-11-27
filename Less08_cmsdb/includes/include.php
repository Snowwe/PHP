<? require_once("../includes/function.php") ?>
<?
$select_subject_id=$_GET['subject'];
$select_page_id=$_GET['page'];
?>
<nav>
    <br>
    <a href="manage_content.php">manage_content</a>
    <br><br>
    <a href="new_subject.php">include</a>
    <br><br>
    <hr><hr>

  <ul class="subjects">
    <?php
    $result=find_all_subjects();
    while ($subject = mysqli_fetch_assoc($result)) {
        ?>
        <li>
        <a href="manage_content.php?subject=<? echo $subject['id']; ?>">
        <?
        //выводим содержимое каждого ряда
        echo $subject['menu_name'];
        ?></a>
        <ul class="pages">
            <?
            $page_set=find_all_pages($subject['id']);
            while ($page = mysqli_fetch_assoc($page_set)) { ?>
              <li>
                <a href="manage_content.php?page=<? echo $page['id']; ?>">
                <?php
                echo $page['menu_name'];
                ?>
                </a>
                </li>
                <?
            }
            ?>          
            <?
          //4й шаг. Чистим перед закрытием
            mysqli_free_result($page_set);
            ?>
          </ul>
        </li>
      <? } ?>
<?
//4й шаг. Чистим перед закрытием
mysqli_free_result($result);

?>
        </ul>
    &nbsp;
  </nav>