<?php 
Class Author{
    public $name;
    public $description;

    public function __construct($name,$description){
        $this ->name = $name;
        $this ->description = $description;
    }
    public function show($type){
        if ($type === 'name'){
            return $this  -> name ;
        }
        elseif ($type == "description"){
            return $this->description;
        }
        else{
            return "name : ".$this->name. "description : ".$this->description;
        }
    }
}

Class Book{
    public $ISBN;
    public $tittle;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN,$tittle,$description,$category,$language,$numberOfPage,$author,$publisher){
        $this->ISBN = $ISBN ;
        $this->tittle = $tittle;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher =$publisher;

    }
    public function showAll() {
        return [
            "ISBN" => $this->ISBN,
            "title" => $this->tittle,
            "description" => $this->description,
            "category" => $this->category,
            "language" => $this->language,
            "numberOfPage" => $this->numberOfPage,
            "author" => $this->author->show("name"),
            "publisher" => $this->publisher->name
        ];
    }
    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return "Book not found";
        }
    }
}

Class Publisher{
    public $name;
    public $address;
    public $phone;

    function __construct($name,$address,$phone){
        $this->name =$name;
        $this->address =$address;
        $this->phone = $phone;
    }
    public function setphone($phone){
        $this->phone = $phone;
    }
    public function getphone(){
        return $this->phone;
    }
}

$author = new Author("Henry Manampiring", "seorang penulis dari buku Filosofi Teras");
$publisher = new Publisher("PT. Kompas Media Nusantara", "Jakarta", "123456789");
$book = new Book(9786233463034, "Filosofi Teras", "sebuah buku filosofi stoic", "filosofi", "Indonesia", 346, $author, $publisher);

echo " Informasi buku ";
print_r($book->showAll());