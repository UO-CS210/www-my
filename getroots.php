<?php
  /* Hack for making paths portable between servers, while also
   * allowing related files to be grouped in sub-directories.
   * This pretty much breaks Dreamweaver, which does not have a real
   * PHP interpreter but instead just special-cases "include" links, 
   * but that's life.
   */
  global $rooturl;
  global $rootdir; 
  $this_page = $_SERVER["REQUEST_URI"];
  $this_file = __FILE__;
  if (preg_match("/^.*cis210/", $this_page, $matches)) {
      $rooturl = $matches[0] . "/";
  } else {
      $rooturl = "";
  }
  if (preg_match("/^.*cis210/", $this_file, $matches)) {
      $rootdir = $matches[0] . "/";
  } else {
      $rootdir = "";
  }

  /* Use the computed path to print a quoted URL */
  function relURL($suffix) {
       global $rooturl; 
       echo '"' . $rooturl . $suffix . '"';
  }

  /* Using a computed "include" path directly seems to be a problem.
   * We will instead set the include path.
   */
   set_include_path( $rootdir . PATH_SEPARATOR . $rootdir . "lib" ); 

   /* OBSOLETED 
   * Use the computed path to return (not print)
   * a file path for PHP code
   *
   *  function relPath($suffix) {
   *    global $rootdir; 
   *    return ($rootdir . $suffix) ;
   * }
   */

  /* Debugging:
     <p>rooturl = <?php echo $rooturl ?>
     <p>rootdir = <?php echo $rootdir ?>
     <p>relPath("lib/headcontent.php") =
     <?php echo relPath("lib/headcontent.php"); ?></p>
     <p>relURL("foo") = <?php relURL("foo"); ?></p>
  */
?>
