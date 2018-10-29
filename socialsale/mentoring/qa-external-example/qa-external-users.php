<?php


if (!defined('QA_VERSION')) { 
	header('Location: ../');
	exit;
}


/
function qa_get_mysql_user_column_type()
{
	

	return null;

function qa_get_login_links($relative_url_prefix, $redirect_back_to_url)
{


	return array(
		'login' => null,
		'register' => null,
		'logout' => null
	);

	
}



function qa_get_logged_in_user()
{
	// Until you edit this function, nobody is ever logged in

	return null;

	
}


function qa_get_user_email($userid)
{
	

	return null;

	
}



function qa_get_userids_from_public($publicusernames)
{
	

	return null;


}

function qa_get_public_from_userids($userids)
{
	
	return null;


}



function qa_get_logged_in_user_html($logged_in_user, $relative_url_prefix)
{
	

	$publicusername = $logged_in_user['publicusername'];

	return '<a href="' . qa_path_html('user/' . $publicusername) . '" class="qa-user-link">' . htmlspecialchars($publicusername) . '</a>';


}



function qa_get_users_html($userids, $should_include_link, $relative_url_prefix)
{


	$useridtopublic = qa_get_public_from_userids($userids);

	$usershtml = array();

	foreach ($userids as $userid) {
		$publicusername = $useridtopublic[$userid];

		$usershtml[$userid] = htmlspecialchars($publicusername);

		if ($should_include_link)
			$usershtml[$userid] = '<a href="' . qa_path_html('user/' . $publicusername) . '" class="qa-user-link">' . $usershtml[$userid] . '</a>';
	}

	return $usershtml;

	
	
}


function qa_avatar_html_from_userid($userid, $size, $padding)
{
	

	return null;

	
}



function qa_user_report_action($userid, $action)
{
	
}
