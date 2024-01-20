<?php

class marius
{

	public function __construct()
	{
		$this->database = new Database();
	}

	public function save($entityName)
	{
		$stmt = $this->database->prepare("INSERT INTO $entityName (name) VALUES (:name)");
		$stmt->bindParam(':name', $this->save);
		$stmt->execute();
	}

	public function index($entityName)
	{
		$stmt = $this->database->prepare("SELECT * FROM $entityName");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function show($entityName, $id)
	{
		$stmt = $this->database->prepare("SELECT * FROM $entityName WHERE id = :id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function edit($id, $entityName)
	{
		$stmt = $this->database->prepare("SELECT * FROM $entityName WHERE id = :id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		foreach ($result as $key => $value) {
			$this->$key = $value;
		}
	}

	public function delete($entityName, $id)
	{
		$stmt = $this->database->prepare("DELETE FROM $entityName WHERE id = :id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		echo "=> Enregistrement supprimé avec succès.\n";
	}

}
?>