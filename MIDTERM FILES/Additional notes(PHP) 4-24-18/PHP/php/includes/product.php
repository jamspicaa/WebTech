<?php
    class Product implements JsonSerializable {
        private $prodid;
        private $category;
        private $description;
        private $price;
        private $image;

        public function __construct($prodid, $category, $description, $price, $image) {
            $this->prodid = $prodid;
            $this->category = $category;
            $this->description = $description;
            $this->price = $price;
            $this->image = "data:image;base64," . base64_encode($image);
        }

        public function get_prodid() {
            return $this->prodid;
        }

        public function get_category() {
            return $this->category;
        }

        public function get_description() {
            return $this->description;
        }

        public function get_price() {
            return $this->price;
        }

        public function get_image() {
            return $this->image;
        }

        public function jsonSerialize() {
            return [
                'prodid' => $this->prodid,
                'category' => $this->category,
                'description' => $this->description,
                'price' => $this->price,
                'image' => $this->image
            ];
        }
    }
