<?php
class M_booking extends CI_Model{
    
    /*function get_iduser($id){
        $query = $this->db->get_where('registereduser', array('username' => $id));
        $query_row = $query->row();
        return $query_row;
    }*/
    

    public function booking_view($id_book)
    {
        return $this->db->where('id_book', $id_book)
                        ->limit(1)
                        ->get('bookticket')
                        ->row();
    }

     public function get_iduser($id){
        $query = $this->db->get_where('user', array('username' => $id));
        $query_row = $query->row();
        return $query_row;
    }

     function data_ticket($data){
        $query = $this->db->insert('bookticket', $data);
    }
         function delete($id_movie){
        $query = $this->db->delete('bookticket', $id_movie);
    }

    public function update($qtysubticket, $id_post)
    {
        $query = ('update `post` SET `kuota` = `kuota` - '.$qtysubticket.' where `id_post` = '.$id_post);
        $this->db->query($query);
    }
        public function cancel($id_book, $id_post)
    {
        $query = ('update `post` SET `kuota` = `kuota` + '.$qty.' where `id_post` = '.$id_post);
        $this->db->query($query);
    }
   
    
}