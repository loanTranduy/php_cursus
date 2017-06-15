<?php
if (isset($_POST['insert_module'])):
    echo $sql = sprintf("INSERT INTO modules SET titre ='%s', role ='%s', responsable ='%s', centre ='%s', year ='%s', content ='%s'",
        addslashes($_POST['titre']),
        addslashes($_POST['role']),
        addslashes($_POST['responsable']),
        $_POST['telephone'],
        $_POST['year'],
        addslashes($_POST['content'])
        );
        $connect->query($sql);
        echo $connect->error;
        header("location:new_module.php");
        exit;
endif;
?>
<form action="home.php" method="post" id="formmodule">
            <div class="lemodule le">
                <label for="titre">Titre:</label>
                <input type="text" name="titre" id="titre">

                <label for="content">Contenu:</label>
                <textarea name="content" id="content" class="textarea" cols="50" rows="20" placeholder ></textarea>

                <label for="role">Rôle:</label>
                <input type="text" name="role" id="role">
           
                <label for="responsable">Responsable:</label>
                <input type="text" name="responsable" id="responsable" >
           
                <label for="centre">Centre:</label>
                <input type="text" name="centre" id="centre">
           
                <label for="year">Année:</label>
                <input type="text" name="year" id="year">

                <input type="hidden" name="insert_module">
                <button>Ajouter</button>
            </div>
        </form>
<?php print_r($_POST);?>