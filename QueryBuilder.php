<?php

    class SQLBUILDER {
        protected $sql = [];
                        

        public function select($field = '*')
        {
            $this->sql['select'] = "SELECT {$field} ";
            return $this;
        }

        public function from($table)
        {
            $this->sql['from'] = " FROM {$table}";
            return $this;
        }

        public function where($where)
        {
            $this->sql['where'] = " WHERE {$where}";
            return $this;
        }

        public function and($and)
        {
            $this->sql['and'] = " AND {$and}";
            return $this;
        }

        public function or($or)
        {
            $this->sql['or'] = " OR {$or}";
            return $this;
        }

        public function groupby($groupby)
        {
            $this->sql['groupby'] = " GROUP BY {$groupby}";
            return $this;
        }

        public function sum($sum)
        {
            $this->sql['sum'] = " SUM({$sum})";
            return $this;
        }

        public function as($as)
        {
            $this->sql['as'] = " AS {$as}";
            return $this;
        }

        public function insert($table, $data = [])
        {
            foreach ($data as $key => $value) {
            $key = implode(',', array_keys($data));
            $value = implode("','", array_values($data));
            $this->sql['insert'] = "INSERT INTO $table ($key) VALUES ('{$value}')";
            }
            return $this;
        }



        public function sql()
        {
            $sql = '';
            if (!empty($this->sql)) {
            foreach ($this->sql as $key => $value){
               $sql .= $value;
            }
            return $sql;
            }
        }

    }
?>