<?php
/**********************************************************
Alamsport News V 2.0
Powred By Webek.net
Copyright © 2011 Alamsport. All Rights Reserved
----------------------------------------------------------------------------------
File Name : globals.php
Description : Global File
----------------------------------------------------------------------------------
If you want any support
Website : www.webek.net
Web : http://www.webek.com/
E-mail : hmatest@gmail.com/
***********************************************************/

class db{
	var $_host="";
	var $_name="";
	var $_pass="";
	var $_db="";
	var $_prefix="";
	var $_sql="";
	var $_connect="";
	var $_line="";
	var $_cnf="";
	function db($cnf){
		$this->_host=$cnf['db_host'];
		$this->_name=$cnf['db_username'];
		$this->_pass=$cnf['db_password'];
		$this->_db=$cnf['db_name'];
		$this->_prefix=$cnf['db_prefix'];
		$this->_cnf=$cnf;
	}
	// this function is connect to database
	function connect_db(){
		$this->_connect=mysql_connect($this->_host,$this->_name,$this->_pass) or die ("<div align='center'><font face='Tahoma' size='2'><b>error in connect server</font></div>");
		mysql_select_db($this->_db, $this->_connect) or die ("<div align='center'><font face='Tahoma' size='2'><b>error in connect database</font></div>");
				mysql_set_charset('utf8');
	}
	// this function is select tables
	// e.g:
	// $db->line(__line__);      // if you want show error line, write this code.
	// $db->select("tablename WHERE id = '1' ORDER BY id DESC","id, ...");
	function select($txt,$field="*"){
		$this->_sql=mysql_query("SELECT ".$field." FROM ".$this->_prefix.$txt) or die (db::error());
		return $this->_sql;
	}
			// where status=1 and year_id='".user_year_id."' and certif_id='".cat."' and modules_id='".mid."' 
	function selectquery($txt,$field="*"){
		$this->_sql=mysql_query("
		SELECT *
FROM `".$this->_prefix."lessons` `l`
LEFT JOIN `".$this->_prefix."lessons_pass` `lp` 
    ON `lp`.`lesson_id` = `l`.`id` AND `lp`.`userid` = '".uid."'  LEFT JOIN `".$this->_prefix."users` `u` ON `lp`.`userid` = `u`.`id`
	WHERE
	`l`.`year_id` = '".user_year_id."'  
	and 
	`l`.`certif_id` = '".cat."'  
	and
	`l`.`modules_id` = '".mid."'  
	and
	`l`.`status` = '1'


		") or die (db::error());
		return $this->_sql;
	}
		
	function query($txt,$field="*"){
		$this->_sql=mysql_query("SELECT ".$field." FROM ".$this->_prefix.$txt) or die (db::error());
		return $this->_sql;
	}
		
		
	function select_sum($txt,$field="*"){
		$this->_sql=mysql_query("SELECT SUM($field)as sum  FROM  ".$this->_prefix.$txt) or die (db::error());
		while ($row=  mysql_fetch_array ($this->_sql)){
        $y=$row['sum'];
		}
		return $y;
	}
	
	
	// $query = mysql_query("SELECT count(*) FROM ".$Prefix."NOTIFY WHERE FORUM_ID = '".$f."' AND STATUS = '2' ") or die(mysql_error());
	function select_cn($txt,$field="*"){
		$result=mysql_query("SELECT count($field) as total FROM ".$this->_prefix.$txt) or die (db::error());
		$data=mysql_fetch_assoc($result);
		return $data['total'];
	}
	// this function is insert data to tables
	// e.g: $db->insert("tablename (id,....) VALUES ('', ....)");
	function insert($txt){
		$sql=mysql_query("INSERT INTO ".$this->_prefix.$txt) or die (db::error());
		return $sql;
	}
	// this function is update data in tables
	// e.g: $db->update("tablename SET field = '1', ...... WHERE id = '1' ");
	function update($txt){
		$sql=mysql_query("UPDATE ".$this->_prefix.$txt) or die (db::error());
		return $sql;
	}
	// this function is update data in tables
	// e.g: $db->update("tablename SET field = '1', ...... WHERE id = '1' ");
		function fetchRow($sql){

		$rs=mysql_fetch_row($sql);

		return $rs;

	}
	
	// function count($where,$id='id'){
		// $this->_sql=mysql_query("SELECT COUNT($id) FROM ".$this->_prefix.$where) or die (db::error());
		// $rs=$this->fetchRow($sql);
		// return $rs[0];

	// }
	// function db_count($select,$field){
	// global $db;
	// $sql = $this->select($select,"count($field)");
	// $count = $this->result($sql, 0, "count(".$field.")");
	// return $count;
	// }

	// function count_sql($where,$id='id'){
		// $sql=mysql_result("SELECT COUNT($id) FROM ".$this->_prefix.$where,__file__,__line__);
		
		// $rs=$this->fetchRow($sql);
		// return $rs[0];
	// }

		function count_sql($where,$id='id'){
		$sql=mysql_query("SELECT COUNT($id) FROM ".$this->_prefix.$where,__file__,__line__);
		$rs=$this->fetchRow($sql);
		return $rs[0];

	}
	
	// this function is delete data from tables
	// e.g: $db->delete("tablename WHERE id = '1' ");
	function delete($txt){
		$sql=mysql_query("DELETE FROM ".$this->_prefix.$txt) or die (db::error());
		return $sql;
	}
	// this function is number of rows
	function num_rows($sql=""){
		$func=mysql_num_rows($sql==""?$this->_sql:$sql);
		return $func;
	}
	// this function is fetch of rows
	function fetch_rows($sql=""){
		$func=mysql_fetch_rows($sql==""?$this->_sql:$sql);
		return $func;
	}
	// this function is fetch of array
	function fetch_array($sql=""){
		$func=mysql_fetch_array($sql==""?$this->_sql:$sql);
		return $func;
	}
	// this function is result
	function result($x,$txt,$sql=""){
		$func=mysql_result(($sql==""?$this->_sql:$sql),$x,$txt);
		return $func;
	}
	// this function is get data from database
	// e.g: $db->get("tablename","fieldname","id",__line__);  // if you want show error line.
	// e.g: $db->get("tablename","fieldname","id");  // if you not want show error line.
	function get($table,$var,$id,$line=""){
		$this->_line=$line;
		$this->select("$table where id = '$id'",$var);
		if($this->num_rows()>0){
			$rs=$this->fetch_array();
			$get=$rs[$var];
		}
		else{
			$get="none";
		}
		return $get;
	}
	// this function is error
	function error(){
		$len=strlen(mysql_error());
		$error='<div align=center dir=ltr>'.substr(mysql_error(),0,$len-1).': '.($this->_line+1).'</div>';
		return $error;
	}
	// this function is line
	function line($line){
		$this->_line=$line;
	}

	
		function fetchAssoc($sql){
		$rs=mysql_fetch_assoc($sql);
		return $rs;
	}
	
	
	
	
			// this function is get data from database
	// e.g: $db->get("tablename","fieldname","id",__line__);  // if you want show error line.
	// e.g: $db->get("tablename","fieldname","id");  // if you not want show error line.
	function get_sql_double($table,$var,$field,$value,$secendfield,$valuesecend,$line=""){
		$this->_line=$line;
		$this->select("$table where $field = '$value' and $secendfield = '$valuesecend' ",$var);
		if($this->num_rows()>0){
			$rs=$this->fetch_array();
			$get=$rs[$var];
		}
		else{
			$get="none";
		}
		return $get;
	}
	
	
	
	
		// this function is get data from database
	// e.g: $db->get("tablename","fieldname","id",__line__);  // if you want show error line.
	// e.g: $db->get("tablename","fieldname","id");  // if you not want show error line.
	function get_sql($table,$var,$field,$value,$line=""){
		$this->_line=$line;
		$this->select("$table where $field = '$value'",$var);
		if($this->num_rows()>0){
			$rs=$this->fetch_array();
			$get=$rs[$var];
		}
		else{
			$get="none";
		}
		return $get;
	}
	
			// this function is get data from database
	// e.g: $db->get_sql_none("tablename","fieldname","id",__line__);  // if you want show error line.
	// e.g: $db->get_sql_none("tablename","fieldname","id");  // if you not want show error line.
	
	function get_sql_none($table,$var,$id,$line=""){
		$this->_line=$line;
		$this->select("$table where id = '$id'",$var);
		if($this->num_rows()>0){
			$rs=$this->fetch_array();
			$get=$rs[$var];
		}
		else{
			$get="s";
		}
		return $get;
	}
	
	
	function get_ex($table,$var,$id,$filed,$line=""){
		$this->_line=$line;
		$this->select("$table where $filed = '$id'",$var);
		if($this->num_rows()>0){
			$rs=$this->fetch_array();
			$get=$rs[$var];
		}
		else{
			$get="none";
		}
		return $get;
	}	
}



?>