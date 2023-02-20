<?php

class Common_model extends CI_Model
{
    ############################### Get Value from Database for specific field ########################

    // public function send_Notification($gcmId,$data,$userdata,$type,$device_type,$notificationId)
    public function send_Notification($gcmId, $data, $userdata, $type, $device_type)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        if ($device_type == 'A') {
            // $data['notificationId']=$notificationId;
            $data = array_merge($data, $userdata);
            $fields = array("to" => $gcmId, 'data' => $data);
        } else {
            $resgistrationIDs = array($gcmId);
            $fields = array(
                'registration_ids' => $resgistrationIDs,
                'notification' => array(
                    'title' => $data['title'],
                    'body' => $data['message'],
                    'type' => $data['type'],
                    // 'notificationId' =>$notificationId,
                    'user_id' => $data['user_id'],
                    'data' => $userdata,
                    'badge' => (int)1,
                    'sound' => 'default'
                ),
                'priority' => 'high'
            );
        }
        $headers = array('Content-Type:application/json', 'Authorization:key=' . SERVER_KEY);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function getValue($tableName, $field_name, $where)
    {
        $query = $this->db->get_where($tableName, $where);
        $row = $query->row_array();
        return $row[$field_name];
        exit;
    }

    ############################### Return array from specific table ########################

    function getData($tableName, $param)
    {
        $query = $this->db->get_where($tableName, $param);
        return $query->result();
    }

    ############################### Return all array from specific table ########################
    function getAll($table, $where_clause = NULL, $order_by_fld = NULL, $order_by = NULL, $limit = NULL, $offset = NULL)
    {
        if ($where_clause != '')
            $this->db->where($where_clause);
        if ($order_by_fld != '')
            $this->db->order_by($order_by_fld, $order_by);
        if ($limit != '' && $offset != '')
            $this->db->limit($limit, $offset);
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result_array();
    }

    ############################### Return a array from specific table ########################
    function getSingle($table, $where_clause = NULL, $order_by_fld = NULL, $order_by = NULL, $limit = NULL, $offset = NULL)
    {
        if ($where_clause != '')
            $this->db->where($where_clause);
        if ($order_by_fld != '')
            $this->db->order_by($order_by_fld, $order_by);
        if ($limit != '' && $offset != '')
            $this->db->limit($limit, $offset);
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result_array();;
    }

    ############################### Delete array from specific table ########################

    function deleteData($table, $where)
    {
        $this->db->delete($table, $where);
    }

    ############################### Update array for specific table ########################

    function updateValue($row, $table, $where_clause)
    {
        $this->db->where($where_clause);
        $this->db->update($table, $row);
        $temp = $this->db->affected_rows();
        return $temp;
    }

    ############################### Count array for specific table ########################

    function getCount($table, $where_clause = NULL, $order_by_fld = NULL, $order_by = null, $limit = null, $offset = null)
    {
        if ($where_clause != '')
            $this->db->where($where_clause);
        if ($order_by_fld != '')
            $this->db->order_by($order_by_fld, $order_by);
        if ($limit != '' && $offset != '')
            $this->db->limit($limit, $offset);
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->num_rows();
    }

    ############################### Insert array for specific table ########################

    function insertValue($table, $row)
    {
        $str = $this->db->insert_string($table, $row);
        $query = $this->db->query($str);
        $insertid = $this->db->insert_id();
        return $insertid;
    }

    ############################### My Common Function ###############################

    function getById($table, $field, $id = NULL, $order_by_fld = NULL, $order_by = NULL, $limit = NULL, $offset = NULL)
    {
        if ($id != '')
            $this->db->where($field, $id);
        if ($order_by_fld != '')
            $this->db->order_by($order_by_fld, $order_by);
        if ($limit != '' && $offset != '')
            $this->db->limit($limit, $offset);
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result_array();
    }

    function getResults($filed = '*', $tbl, $where = null, $order_by_fld = null, $order_by = 'DESC', $limit = null, $offset = null)
    {
        if ($tbl) {
            $this->db->select($filed);
            $this->db->from($tbl);
            if ($where != '')
                $this->db->where($where);
            if ($order_by_fld != '')
                $this->db->order_by($order_by_fld, $order_by);
            if ($limit != '' && $offset != '')
                $this->db->limit($limit, $offset);
            $query = $this->db->get();
            return $query->result_array();
        } else {
            return FALSE;
        }
    }

    function getResultsObj($filed = '*', $tbl, $where = null, $order_by_fld = null, $order_by = 'DESC', $limit = null, $offset = null)
    {
        if ($tbl) {
            $this->db->select($filed);
            $this->db->from($tbl);
            if ($where != '')
                $this->db->where($where);
            if ($order_by_fld != '')
                $this->db->order_by($order_by_fld, $order_by);
            if ($limit != '' && $offset != '')
                $this->db->limit($limit, $offset);
            $query = $this->db->get();
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function getSingleRow($filed = '*', $tbl, $where = NULL, $order_by_fld = NULL, $order_by = 'DESC', $limit = 1, $offset = NULL)
    {
        if ($tbl) {
            $this->db->select($filed);
            $this->db->from($tbl);
            if ($where != '')
                $this->db->where($where);
            if ($order_by_fld != '')
                $this->db->order_by($order_by_fld, $order_by);
            if ($limit != '' && $offset != '')
                $this->db->limit($limit, $offset);
            $query = $this->db->get();
            $this->db->last_query();
            return $query->row_array();
        } else {
            return FALSE;
        }
    }

    function getSingleObj($filed = '*', $tbl, $where = NULL, $order_by_fld = NULL, $order_by = 'DESC', $limit = 1, $offset = NULL)
    {
        if ($tbl) {
            $this->db->select($filed);
            $this->db->from($tbl);
            if ($where != '')
                $this->db->where($where);
            if ($order_by_fld != '')
                $this->db->order_by($order_by_fld, $order_by);
            if ($limit != '' && $offset != '')
                $this->db->limit($limit, $offset);
            $query = $this->db->get();
            $this->db->last_query();
            return $query->row();
        } else {
            return FALSE;
        }
    }

    function getTwoTableData($tbl_1, $tbl_2, $fld_1, $fld_2, $where, $order_by_fld = NULL, $order_by = NULL, $limit = NULL, $offset = NULL)
    {
        $this->db->select("$tbl_1.*");
        $this->db->from($tbl_1);
        $this->db->join("$tbl_2", "$tbl_1.$fld_1 = $tbl_2.$fld_2", 'LEFT');
        if ($where != '')
            $this->db->where($where);
        if ($order_by_fld != '')
            $this->db->order_by($order_by_fld, $order_by);
        if ($limit != '' && $offset != '')
            $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }

    function randomPasword($length)
    {
        $smallAlphabets = range('a', 'z');
        $capsAlphabets = range('A', 'Z');
        $numbers = range('1', '9');
        $additional_characters = array('_', '-');
        $final_array = array_merge($smallAlphabets, $numbers, $additional_characters, $capsAlphabets);
        $password = '';
        while ($length--) {
            $key = array_rand($final_array);
            $password .= $final_array[$key];
        }
        $password = 'CCD@' . $password;
        return $password;
    }

    function sendMailFunction($param, $password)
    {
        $to = $param->sendTo;
        $subject = $param->subject;
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: ' . "\r\n";
        $headers .= 'Bcc: ' . "\r\n";
        // $message = $param->content;
        $message = '<html>
                    <body>
                        <p>
                        <h3>
                            Dear Customer,';
        $message .= '</h3>
                        </p>
                         <p>
                                        We received a request to forgot the password for your account.
                         </p><br>
                         <p> Your current account password is : ' . $password;
        $message .= ' </p>
                                    <p>Regards,</p>
                                    <p>BEE Support</p>
                    </body>
                </html>';
        mail($to, $subject, $message, $headers);
    }

    public function sendEmail($to, $msg, $subject)
    {
        $this->load->library('email');
        //~ $config['smtp_host'] = 'smtp.gmail.com';
        //~ $config['smtp_port'] = '587';
        //~ $config['smtp_user'] = 'rajpaltechugo@gmail.com';
        //~ $config['smtp_pass'] = 'XYZ@abc#123';

		$config['smtp_host']      = 'ssl://email-smtp.ap-south-1.amazonaws.com';
		//$config['smtp_host']    = 'ssl://smtp.googlemail.com';
		$config['smtp_user'] 	= 'AKIAWNU34O3Z54UPT64M';
		$config['smtp_pass']  = 'BFfwTd7Ygz/X5eT6/5g7G7Y2+aKHXP9EEYceDzWr57J+';
		$config['smtp_port'] = '465';
        $config['_smtp_auth'] = TRUE;
        $config['smtp_crypto'] = 'tls';
        $config['protocol'] = 'smtp';
        $config['mailtype'] = 'html';
        $config['send_multipart'] = FALSE;
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('sales@techugo.com');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($msg);
        $this->email->send();
         echo $this->email->print_debugger();
         die;

        return true;
    }
}
