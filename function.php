<?php
include "database1.php";
class quary extends database1{
    //----------------------------------<Get Data>--------------------------
    public function getdata(){
        $sql = "SELECT * FROM register";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    //----------------------------------<Insert Data>--------------------------
    public function insert($post)
    {
        // echo "insert called";
        $name  = $post['name'];
        $email = $post['email'];
        $phone = $post['phone'];
        $city  = $post['city'];
        $sql   = "INSERT INTO register(name,email,phone,city) VALUE ('$name','$email','$phone','$city')";
        $result = $this->connect()->query($sql);
        if ($result) {
            header('location:table.php?msg=ins');
        } else {
            echo "error" . $sql . "<br>" . $this->connect()->error;
        }
    }

    //----------------------------------<display Data>--------------------------
    public function displayRecordByid($editid)
    {
        $sql = "SELECT * FROM register WHERE id='$editid'";
        $result = $this->connect()->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return $row;
        }
    }

    //----------------------------------<Update Users Data>--------------------------
    public function updateRecord($post)
    {
        $name  = $post['name'];
        $email = $post['email'];
        $phone = $post['phone'];
        $city  = $post['city'];
        $editd = $post['hid'];
        $sql   = "UPDATE `register` SET `name`='$name',`email`='$email',`phone`='$phone',`city`='$city' WHERE `id`='$editd'";
        $result = $this->connect()->query($sql);
        if ($result) {
            header('location:table.php?msg=ups');
        } else {
            echo "error" . $sql . "<br>" . $this->connect()->error;
        }
    }

    //----------------------------------<Dlete Users Data>--------------------------
    public function deletedata($delid)
    {
        $sql = "DELETE FROM `register` WHERE id='$delid'";
        $result = $this->connect()->query($sql);
        if ($result) {
            header('location:table.php?msg=del');
        } else {
            echo "error" . $sql . "<br>" . $this->connect()->error;
        }
    }
}
?>