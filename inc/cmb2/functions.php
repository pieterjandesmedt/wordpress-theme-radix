<?php
	add_action( 'cmb2_admin_init', 'radix_metabox' );
	function radix_metabox(){

		$home_page = new_cmb2_box( array(
			'id'            => 'authore_name',
			'title'         => 'Blog Options',
			'object_types'  => array( 'post' ),
		) );
		$home_page->add_field( array(
			'name' => 'Author Name',
			'id'   => 'author_name',
			'type' => 'text',
		) );
		$home_page->add_field( array(
			'name' => 'Author Name',
			'id'   => 'banner_title',
			'type' => 'text',
		) );

		$industries = new_cmb2_box(array(
			'title'   => 'Industries Options',
			'id'     => 'industries_options',
			'object_types'=> array( 'industries' ),
		));
		$industries->add_field( array(
			'name' => 'Industries Image',
			'id'   => 'industries_image',
			'type' => 'file',
			'options' => array(
				'url' => false,
			)
		) );

		$team = new_cmb2_box(array(
			'title'   => 'Team Options',
			'id'     => 'Team_options',
			'object_types'=> array( 'team' ),
		));
		$team->add_field( array(
			'name' => 'Team Image',
			'id'   => 'team_image',
			'type' => 'file',
			'options' => array(
				'url' => false,
			)
		) );
		$team-> add_field(array(
			'name'   => 'Designation',
			'id'     => 'designation',
			'type'   => 'text',
		));
		$team-> add_field(array(
			'name'   => 'Description',
			'id'     => 'team_desc',
			'type'   => 'textarea',
		));
		$team-> add_field(array(
			'name'   => 'Read Button Text',
			'id'     => 'read_button',
			'type'   => 'text',
		));
		$team-> add_field(array(
			'name'   => 'Read Button url',
			'id'     => 'read_button_url',
			'type'   => 'text',
			'default'=> '#'
		));
		$team-> add_field(array(
			'name'   => 'Email Icon',
			'id'     => 'email_icon',
			'type'   => 'text',
			'default'=> 'fa-envelope-o'
		));
		$team-> add_field(array(
			'name'   => 'Email Link',
			'id'     => 'email_link',
			'type'   => 'text',
			'default'=> '#'
		));
		$team-> add_field(array(
			'name'   => 'Linkedin Icon',
			'id'     => 'linkedin_icon',
			'type'   => 'text',
			'default'=> 'fa-linkedin'
		));
		$team-> add_field(array(
			'name'   => 'Linkedin Link',
			'id'     => 'linkedin_link',
			'type'   => 'text',
			'default'=> '#'
		));
		$team-> add_field(array(
			'name'   => 'Twitter Icon',
			'id'     => 'twitter_icon',
			'type'   => 'text',
			'default'=> 'fa-twitter'
		));
		$team-> add_field(array(
			'name'   => 'Twitter Link',
			'id'     => 'twitter_link',
			'type'   => 'text',
			'default'=> '#'
		));
		$team-> add_field(array(
			'name'   => 'Github Icon',
			'id'     => 'github_icon',
			'type'   => 'text',
			'default'=> 'fa-github'
		));
		$team-> add_field(array(
			'name'   => 'Github Link',
			'id'     => 'github_link',
			'type'   => 'text',
			'default'=> '#'
		));


		$tech = new_cmb2_box(array(
			'title'   => 'Tech Options',
			'id'     => 'tech_options',
			'object_types'=> array( 'tech' ),
		));
		$tech->add_field( array(
			'name' => 'Stack Image',
			'id'   => 'stack_image',
			'type' => 'file',
			'options' => array(
				'url' => false,
			)
		) );


		$tech = new_cmb2_box(array(
			'title'   => 'Events Options',
			'id'     => 'events_options',
			'object_types'=> array( 'events' ),
		));
		$tech->add_field( array(
			'name' => 'City',
			'id'   => 'state_text',
			'type' => 'text',
		) );
	}
?>
