<?php 
    class Login_m extends MX_Controller{
        function __construct(){
            parent::__construct();
           $this->db = $this->load->database('default', TRUE);
        }

        public function auth($username, $password){
            return $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
        }

        public function get_by_tanggal_at_bhm($tanggal) {
            return $this->db->select('jadwal_dinas.*')
                ->from('jadwal_dinas')
                ->join('shift', 'shift.shift = jadwal_dinas.shift')
                ->join('users', 'users.id = jadwal_dinas.createuser')
                ->join('group', 'group.id = users.group')
                ->where('jadwal_dinas.tanggal', $tanggal)
                ->where('jadwal_dinas.shift !=', 'OFF')
                ->where('users.group =', '2')
                ->order_by('shift.id', 'asc')
                ->get()
                ->result();
        }
        public function get_by_tanggal_at_bhi($tanggal) {
            return $this->db->select('jadwal_dinas.*')
                ->from('jadwal_dinas')
                ->join('shift', 'shift.shift = jadwal_dinas.shift')
                ->join('users', 'users.id = jadwal_dinas.createuser')
                ->join('group', 'group.id = users.group')
                ->where('jadwal_dinas.tanggal', $tanggal)
                ->where('jadwal_dinas.shift !=', 'OFF')
                ->where('users.group =', '1')
                ->order_by('shift.id', 'asc')
                ->get()
                ->result();
        }
    }

