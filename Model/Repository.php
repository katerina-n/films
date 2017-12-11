<?php
namespace Model;
use Model\Entity\Films;
class Repository{
    public static function save(Films $films){
        global $pdo;
       $data=[
            'id'=>$films->getId(),
            'title'=> $films->getTitle(),
            'release_year'=> $films->getReleaseYear(),
            'format'=> $films->getFormat(),
            'stars'=> $films->getStars()
        ];
//var_dump($data);
        if($data['id']==null){
            $sql="INSERT INTO `films`(title, release_year, format, stars) VALUES ('{$data['title']}' , '{$data['release_year']}', '{$data['format']}', '{$data['stars']}')";
            $std=$pdo->prepare($sql);
            // $std=$pdo->query($sql);
            $std->execute($data);
        }
        else
            if($data['id']!=null){
                $i=$films->getId();

                $sql="UPDATE `films` SET title= '{$data["title"]}', release_year= '{$data["release_year"]}', format= '{$data["format"]}', stars= '{$data["stars"]}' WHERE id='{$i}'";
                $std=$pdo->prepare($sql);
                // $std=$pdo->query($sql);
                $std->execute();


            }
    }
    public static function findAll(){
        global $pdo;
        $collections=[];
        $sql="SELECT *FROM `films`";
        $std=$pdo->prepare($sql);
        $std->execute();
        $result=$std->fetchAll(\PDO::FETCH_ASSOC);

       for($i=0; $i<=count($result)-1; $i++) {
           $tests = (new Films())->setId($result[$i]['id'])
                ->setTitle($result[$i]['title'])
                ->setReleaseYear($result[$i]['release_year'])
                ->setFormat($result[$i]['format'])
                ->setStars($result[$i]['stars']);

            $collections[]=$tests;
        }
        return $collections;

    }
    public static function sortedByName(){
        global $pdo;
        $collections=[];
        $sql="SELECT *FROM `films` ORDER BY title";
        $std=$pdo->prepare($sql);
        $std->execute();
        $result=$std->fetchAll(\PDO::FETCH_ASSOC);

        for($i=0; $i<=count($result)-1; $i++) {
            $tests = (new Films())->setId($result[$i]['id'])
                ->setTitle($result[$i]['title'])
                ->setReleaseYear($result[$i]['release_year'])
                ->setFormat($result[$i]['format'])
                ->setStars($result[$i]['stars']);

            $collections[]=$tests;
        }
       // die(var_dump($collections));
        return $collections;

    }
    public static function findByName($title){
        global $pdo;
        $collections=[];
        $sql="SELECT * FROM `films` WHERE title like '%{$title}%' OR stars like '%{$title}%'";
        $std=$pdo->prepare($sql);
        $std->execute();
       // die($std);
        $result=$std->fetchAll(\PDO::FETCH_ASSOC);
       // die(var_dump($result));
        for($i=0; $i<=count($result)-1; $i++) {
            $tests = (new Films())->setId($result[$i]['id'])
                ->setTitle($result[$i]['title'])
                ->setReleaseYear($result[$i]['release_year'])
                ->setFormat($result[$i]['format'])
                ->setStars($result[$i]['stars']);

            $collections[]=$tests;
        }
       // die(var_dump($collections));
        return $collections;

    }


    public static function delete($id){
        global $pdo;
        $sql="DELETE from `films` where id={$id}";
            $std=$pdo->prepare($sql);
            // $std=$pdo->query($sql);
            $std->execute();
        $collections=[];
        $sql="SELECT *FROM `films`";
        $std=$pdo->prepare($sql);
        $std->execute();
        $result=$std->fetchAll(\PDO::FETCH_ASSOC);

        for($i=0; $i<=count($result)-1; $i++) {
            $tests = (new Films())->setId($result[$i]['id'])
                ->setTitle($result[$i]['title'])
                ->setReleaseYear($result[$i]['release_year'])
                ->setFormat($result[$i]['format'])
                ->setStars($result[$i]['stars']);

            $collections[]=$tests;
        }
        return $collections;

    }
}