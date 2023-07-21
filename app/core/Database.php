<?php 

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    // database handler
    private $dbh;

    // statement
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        // option
        $option = [
            PDO::ATTR_PERSISTENT => true, // untuk membuat koneksi terjaga terus
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // untuk menampilkan error
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // untuk menjalankan query
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    // untuk binding data
    public function bind($param, $value, $type = null)
    {
        // jika type nya null
        if (is_null($type)) {
            // maka jalankan switch case
            switch (true) {
                // jika valuenya integer
                case is_int($value):
                    // maka type nya integer
                    $type = PDO::PARAM_INT;
                    break;
                // jika valuenya boolean
                case is_bool($value):
                    // maka type nya boolean
                    $type = PDO::PARAM_BOOL;
                    break;
                // jika valuenya null
                case is_null($value):
                    // maka type nya null
                    $type = PDO::PARAM_NULL;
                    break;
                // jika valuenya string
                default:
                    // maka type nya string
                    $type = PDO::PARAM_STR;
            }
        }

        // lalu kita jalankan bindValuenya
        $this->stmt->bindValue($param, $value, $type);
    }

    // untuk eksekusi
    public function execute()
    {
        $this->stmt->execute();
    }

    // untuk menampilkan semua data
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // untuk menampilkan satu data
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        // untuk menghitung baris yang ada di tabel
        return $this->stmt->rowCount();
    }
}