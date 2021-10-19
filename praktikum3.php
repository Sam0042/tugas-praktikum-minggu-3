<?php

# membuat class Animal
class Animal
{
  # property animals
    public $animals;
  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($data)
  {
      $this->animals = $data;
  }

  # method index - menampilkan data animals
  public function index()
  {
    # gunakan foreach untuk menampilkan data animals (array)
    foreach ($this->animals as $tampilkan) {
        echo "$tampilkan&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    return $this->animals;
  }

  # method store - menambahkan hewan baru
  # parameter: hewan baru
  public function store($data)
  {
    # gunakan method array_push untuk menambahkan data baru
    array_push($this->animals,$data);
    return $this->animals;
  }

  # method update - mengupdate hewan
  # parameter: index dan hewan baru
  public function update($index, $data)
  {
    array_replace($this->animals,$data); #yang ini pusing kak gak bisa2 :D
  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index)
  {
    # gunakan method unset atau array_splice untuk menghapus data array
    unset($this->animals[$index]);
  }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(['anjing','badak','kuda']);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";
echo "<br>";