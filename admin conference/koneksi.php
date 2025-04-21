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
        $query = "SELECT main_topic.id AS id_title, topic.id AS id, main_topic.name AS main_topic, topic.name AS topic FROM topic JOIN main_topic ON topic.main_topic_id = main_topic.id ORDER BY main_topic.name, topic.name";

        return mysqli_query($koneksi, $query);
    }

    public function TampilTitle() {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM main_topic";

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

    public function CreateTopic($main_topic_id, $name) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "INSERT INTO topic (main_topic_id, name) VALUES ('$main_topic_id', '$name')";

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

    function update_user($main_topic_id, $id, $name){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "UPDATE topic SET main_topic_id = '$main_topic_id', name = '$name' WHERE id = '$id' ";

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

    // CRUD ADMIN
    function TampilAdmin() {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM admin";

        return mysqli_query($koneksi, $query);
    }

    public function CreateAdmin($username, $full_name, $no_hp, $email, $password, $image) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "INSERT INTO admin (username, full_name, no_hp, email, password, image) VALUES ('$username', '$full_name', '$no_hp', '$email', '$password', '$image')";

        return mysqli_query($koneksi, $query);
    }

    function GetIdAdmin($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "SELECT * FROM admin WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }

    public function UpdateAdmin($id, $username, $full_name, $no_hp, $email, $password = null, $image = null) {
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        
        $query = "UPDATE admin SET username = '$username', full_name = '$full_name', no_hp = '$no_hp', email = '$email'";
    
        // Tambahkan password hanya jika tidak kosong
        if (!empty($password)) {
            $query .= ", password = '$password'";
        }
    
        // Tambahkan image hanya jika tidak kosong
        if (!empty($image)) {
            $query .= ", image = '$image'";
        }
    
        $query .= " WHERE id = '$id'";
        
        return mysqli_query($koneksi, $query);
    }
    

    function DeleteAdmin($id){
        $koneksi = mysqli_connect($this->local, $this->username, $this->password, $this->database);
        $query = "DELETE FROM admin WHERE id = '$id'";

        return mysqli_query($koneksi, $query);
    }


}

$conference = new Koneksi();
$koneksi = $conference->koneksi;
?>