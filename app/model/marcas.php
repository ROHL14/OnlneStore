<?php
include_once "app/model/db.class.php";

class Marcas extends BaseDeDatos
{
  public function __construct()
  {
    parent::conectar();
  }

  public function getAll()
  {
    return $this->executeQuery("Select id_marca,marca from marcas order by id_marca");
  }

  public function getMarcaByName($name)
  {
    return $this->executeQuery("Select id_marca,marca from marcas where ='$name'");
  }

  public function getMarcaByNameAndId($name, $id)
  {
    return $this->executeQuery("Select id_marca,marca from marcas where ='$name' and id_marca<>'$id'");
  }

  public function save($data)
  {
    return $this->executeInsert("insert into marcas set marca='{$data['marca']}'");
  }

  public function update($data)
  {
    return $this->executeUpdate("update marcas set marca='{$data['marca']}' where id_marca='{$data['id_marca']}'");
  }

  public function getOneMarca($id)
  {
    return $this->executeQuery("Select id_marca,marca from marcas where id_marca='$id'");
  }

  public function deleteMarca($id)
  {
    return $this->executeUpdate("delete from marcas where id_marca='$id'");
  }
}