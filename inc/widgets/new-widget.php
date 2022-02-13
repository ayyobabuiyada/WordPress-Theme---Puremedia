<?php 

//define the Widget
class New_Widget extends WP_Widget {

    public function __construct() {
        
        parent::__construct(
            'puremedia-new-widget',
            'Puremedia: Block Widget',
        );
    }

    public function form($instance) {

        printf('<b>
                    <label for="%s">Title</label>
                    <input type="text" id="%s" name="%s" value="%s" class="widefat">
                </b>',
        $this->get_field_id('title'),
        $this->get_field_id('title'),
        $this->get_field_name('title'),
        $instance['title'] ?? ''

        );

        printf('<b>
                    <label for="%s">Description</label>
                    <input type="text" id="%s" name="%s" value="%s" class="widefat">
                </b>',
        $this->get_field_id('description'),
        $this->get_field_id('description'),
        $this->get_field_name('description'),
        $instance['description'] ?? ''

        );


    }

    public function widget($args, $instance) {
        
        echo $args['before_widget'];

        if($instance['title']) {

            echo $args['before_title'] . $instance['title'] . $args['after_title'];

        }

        echo $instance['description'];

        echo $args['after_widget'];

    }

    public function update($new_instance, $old_instance) {

        return $new_instance;

    }
}

?>