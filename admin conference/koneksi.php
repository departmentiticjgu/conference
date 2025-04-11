<?php
class Koneksi {
    var $local = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "contentconference";
    var $koneksi;

    public function __construct() {
        // Simpan koneksi ke dalam properti $koneksi
        $this->koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        if (!$this->koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
    }

    // CRUD USER
    public function tampilTopic() {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM topic";

        return mysqli_query($koneksi, $query);
    }

    public function GetTopicsWithSubtopics() {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = " SELECT t.name AS title, tp.name AS topic, st.name AS subtopic FROM main_topic t JOIN topic tp ON tp.main_topic_id = t.id JOIN subtopic st ON st.topic_id = tp.id ORDER BY t.name, tp.name, st.name";
        return mysqli_query($koneksi, $query);
    }
    
    
    public function tampilSub() {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT subtopic.id AS id_subtopic, topic.name AS topic, subtopic.name AS subtopic FROM subtopic JOIN topic ON subtopic.topic_id = topic.id ORDER BY topic.name, subtopic.name";

        return mysqli_query($koneksi, $query);
    }

    public function CreateTopic($name) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "INSERT INTO topic (name) VALUES ('$name')";

        return mysqli_query($koneksi, $query);
    }

    function GetIdTopic($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM topic WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }

    function CreateSub($topic_id, $name) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "INSERT INTO subtopic (topic_id, name) VALUES ('$topic_id', '$name')";

        return mysqli_query($koneksi, $query);
    }

    function GetIdSub($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM subtopic WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }

    function UpdateSub($id, $topic_id, $name) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "UPDATE subtopic SET topic_id = '$topic_id', name ='$name' WHERE id = '$id' ";

        return mysqli_query($koneksi, $query);
    }

    function DeleteSub($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "DELETE FROM subtopic WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }

    function update_user($id, $name){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "UPDATE topic SET name='$name' WHERE id = '$id' ";

        return mysqli_query($koneksi, $query);
    }

    function delete_user($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "DELETE FROM topic WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }

    // CRUD CO-HOST
    function TampilHost() {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM co_host";

        return mysqli_query($koneksi, $query);
    }

    public function CreateHost($image, $name) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "INSERT INTO co_host (image, name) VALUES ('$image', '$name')";

        return mysqli_query($koneksi, $query);
    }

    function GetIdHost($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM co_host WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }

    public function UpdateHost($id, $image, $name) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        if (!empty($image)) {
            // Jika gambar baru di-upload, update gambar
            $query = "UPDATE co_host SET image = '$image', name = '$name' WHERE id = '$id'";  
        } else {
            $query = "UPDATE co_host SET name = '$name' WHERE id = '$id'";          
        }
        
        return mysqli_query($koneksi, $query);
    }

    function DeleteHost($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "DELETE FROM co_host WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }


    // CRUD EDITORIAL BOARD
    function TampilBoard() {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM editorial_board";

        return mysqli_query($koneksi, $query);
    }

    function CreateBoard($name) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "INSERT INTO editorial_board (name) VALUES ('$name')";

        return mysqli_query($koneksi, $query);
    }

    function UpdateBoard($id, $name) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "UPDATE editorial_board SET name = '$name' WHERE id = '$id' ";

        return mysqli_query($koneksi, $query);
    }

    function GetIdBoard($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM editorial_board WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }

    function DeleteBoard($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "DELETE FROM editorial_board WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }

    // CRUD ASSOCIATE EDITORS
    function TampilAssociate() {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM associate_editors";

        return mysqli_query($koneksi, $query);
    }

    function CreateAssociate($name) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "INSERT INTO associate_editors (name) VALUES ('$name')";

        return mysqli_query($koneksi, $query);
    }

    // function tampilRole($role) {
    //     $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
    //     $query = "SELECT id_user, nama FROM users WHERE role = '$role'";
    //     $result = mysqli_query($koneksi, $query);
    
    //     if (!$result) {
    //         die("Query Error: " . mysqli_error($koneksi)); // Debug jika query error
    //     }
    
    //     return $result;
    // }

    function UpdateAssociate($id, $name) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "UPDATE associate_editors SET name = '$name' WHERE id = '$id' ";

        return mysqli_query($koneksi, $query);
    }

    function GetIdAssociate($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM associate_editors WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }

    function DeleteAssociate($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "DELETE FROM associate_editors WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }

    // CRUD CHIEF EDITORS
    function TampilChief() {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM chief_editors";

        return mysqli_query($koneksi, $query);
    }

    function CreateChief($name, $title, $university) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "INSERT INTO chief_editors (name, title, university) VALUES ('$name', '$title', '$university')";

        return mysqli_query($koneksi, $query);
    }

    function UpdateChief($id, $name, $title, $university) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "UPDATE chief_editors SET name = '$name', title = '$title', university = '$university' WHERE id = '$id' ";

        return mysqli_query($koneksi, $query);
    }

    function GetIdChief($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM chief_editors WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }

    function DeleteChief($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "DELETE FROM chief_editors WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }


}

$conference = new Koneksi();
$koneksi = $conference->koneksi;
?>