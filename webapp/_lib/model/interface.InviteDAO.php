<?php
/**
*
* ThinkUp/webapp/_lib/model/interface.InviteDAO.php
*
* Copyright (c) 2009-2011 Terrance Shepehrd, Gina Trapani
*
* LICENSE:
*
* This file is part of ThinkUp (http://thinkupapp.com).
*
* ThinkUp is free software: you can redistribute it and/or modify it under the terms of the GNU General Public
* License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any
* later version.
*
* ThinkUp is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
* warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
* details.
*
* You should have received a copy of the GNU General Public License along with ThinkUp.  If not, see
* <http://www.gnu.org/licenses/>.
*
*
* Invite Data Access Object interface
*
* @license http://www.gnu.org/licenses/gpl.html
* @copyright 2009-2011 Terrance Shepehrd, Gina Trapani
* @author Terrance Shepherd
*
*/
interface InviteDAO {
    /**
    * Gets invite code from tu_invitation
    * @param str $invitation_code
    * @return Invitation
    */
    public function getInviteCode($invite_code);

    /**
    * Adds the invitation code into database
    * @param str $invite_code
    * @return bool
    */
    public function addInviteCode($invite_code);
    
    /**
    * Checks if an Invitation already exists
    * @param str $invite_code
    * @return bool
    */
    public function doesInviteExist($invite_code);

    /**
    * Checks if the Invitation is valid
    * @param str $invite_code
    * @return bool
    */ 
    public function validateInviteCode( $invite_code ) ;
   
    /**
    * Deletes an invitation code after it has been used
    * @paran str $invite_code
    * @return bool
    */
    public function deleteInviteCode( $invite_code ) ;
}
