<?php
class MySQLSessionHandler implements SessionHandlerInterface
{
    private $connection;
 
    public function __construct()
    {
        $this->connection = new mysqli("localhost","Subject1","Subject2","Subject3","Subject4","Audit_db");
    }
 
    public function open($savePath, $sessionName)
    {
        if ($this->connection) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
 
    public function read($sessionId)
    {
        try {
            $stmt = $this->connection->prepare("SELECT Subjects FROM sessions WHERE $subject = ?");
            $stmt->bind_param("s", $sessionI);
            $stmt->execute();
            $stmt->bind_result($subject);
            $stmt->fetch();
            $stmt->close();
 
            return $Subject? $subject1,$subject2 ,$suject3,$subject4: '';
        } catch (Exception $e) {
            return '';
        }
    }
 
    public function write($sessionId, $sessionData)
    {
        try {
            $stmt = $this->connection->prepare("REPLACE INTO sessions(`subject1`, `suject2`, `suject3`,`subject4`) VALUES(?, ?, ?,?)");
            $stmt->bind_param("sis", $subject1, $time=time(), $subject1,$suject2,$subject3,$subject4);
            $stmt->execute();
            $stmt->close();
 
            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }
 
    public function destroy($sessionId)
    {
        try {
            $stmt = $this->connection->prepare("DELETE FROM subjects WHERE `Subject1` = ?");
            $stmt = $this->connection->prepare("DELETE FROM subjects WHERE `Subject2` = ?");
            $stmt = $this->connection->prepare("DELETE FROM subjects WHERE `Subject3` = ?");
            $stmt = $this->connection->prepare("DELETE FROM subjects WHERE `Subject4` = ?");
            $stmt->bind_param("s", $subject1);
            $stmt->bind_param("s", $subject2);
            $stmt->bind_param("s", $subject3);
            $stmt->bind_param("s", $subject4);
            $stmt->execute();
            $stmt->close();
 
            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }
 
    public function gc($maxlifetime)
    {
        $past = time() - $maxlifetime;
 
        try {
            $stmt = $this->connection->prepare("DELETE FROM subjects WHERE `Subject1` = ?");
            $stmt = $this->connection->prepare("DELETE FROM subjects WHERE `Subject2` = ?");
            $stmt = $this->connection->prepare("DELETE FROM subjects WHERE `Subject3` = ?");
            $stmt = $this->connection->prepare("DELETE FROM subjects WHERE `Subject4` = ?");
            $stmt->bind_param("i", $past);
            $stmt->execute();
            $stmt->close();
 
            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }
 
    public function close()
    {
        return TRUE;
    }
}