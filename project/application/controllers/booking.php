  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

public function beli(){

}

public function order($id_movie = NULL)
  {
       
     if($this->session->userdata('username') == TRUE)
     {
       if ($id_movie != NULL)
       {
           $id_ticket = array();
           $count = 0;
           $ticket = $this->detail_model->movie_detail($id_movie);
           
             //$id_ticket[$count++] = $a['id_ticket_type'];
              $id = 'jumlah';
               $id_ticket[$count++] = $this->input->post($id);


           

            if (array_sum($id_ticket)>0)
            {
                $data['show_detail'] = $this->detail_model->get_movie_detail($id_movie);
                $data['show'] = $this->m_booking->booking_view($id_movie);

                $this->load->view('v_booking',$data);
                
            }
            else
            {
              
              echo "<script type='text/javascript'>
                          alert('Please Provide your Purchase quantity !');</script>";
                          redirect(base_url('detail_movie/detail/') . $id_movie,'refresh');
            }

       }
       else {
       
         redirect('home');
       }
     }
     else {
       echo "<script type='text/javascript'>
                     alert('Please Login First !');</script>";
      redirect(base_url('detail_movie/detail/') . $id_movie,'refresh');
     }


   }

   public function booking_show($id_post = NULL){
    $username = $this->session->userdata('username');
    $getid = $this->m_booking->get_iduser($username);
    //$id_payment = $this->input->post('payment');
    $ticket = $this->detail_model->movie_detail($id_post);
    $id_booking = $this->m_booking->booking_view($id_post);
    $id_book = $this->detail_model->get_show_booking($id_post);
    // $id_ticket_type = array();
    // $count = 1
    foreach ($ticket as $t) {
      $id1 = 'id_post' . $t['id_post'];
      $id2 = 'qtysubticket' . $t['id_post'];
      $id3 = 'subtotal' . $t['id_post'];
      $id_movie = $this->input->post($id1);
      $qtysubticket = $this->input->post($id2);
      $subtotal = $this->input->post($id3);

      if ($id_post != 0 && $qtysubticket != 0 && $subtotal != 0)
      {
        if($id_post != NULL)
        {
          $data = array(
          'id_post' =>  $id_post,
          'qty' => $qtysubticket,
          'total' => $subtotal,
          'id_user' => $getid->id_user,
          'date' => date('Y-m-d ')
          //'status' => "Booking" 
          );
        }
        else {
          echo "Gagal";
          /*echo "<script type='text/javascript'>
                      alert('Please select Payment Method !');</script>";
          redirect(base_url('Payment/order/') . $id_show, 'refresh');*/
        }



       $this->m_booking->data_ticket($data);
       $this->m_booking->update($qtysubticket, $id_post);


       echo "<script type='text/javascript'>
                          alert('Booking Success !');</script>";
                          redirect(base_url('movie'));
                          //redirect(base_url('transfer/bayar/') . $id_movie,'refresh');
        

     }

     else {
       redirect('home');
     }
    }
  }

           }
         