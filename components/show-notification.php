<?php
class Notification
{
    private $type_notification, $title, $content;

    public function __construct() {}

    function my_css()
    {
        $css = "
            <style>
                .show-container{
                    position: fixed;
                    width: 100%;
                    height: 100vh;
                    background: rgba(0, 0, 0, 0.25);
                    z-index: 2;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    top: 0;
                    left: 0;
                }

                .show-container.hide{
                    display: none;
                }

                .show-container .show{
                    padding: 10px;
                    background: white;
                    border-radius: 10px;
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                    max-width: 200px;
                }

                .show-container .show button.success{
                    outline: none;
                    border: none;
                    padding: 5px;
                    cursor: pointer;
                    background: darkgreen;
                    color: white;
                    font-weight: bold;
                }
            </style>
        ";

        echo $css;
    }

    function my_js()
    {
        $js = "
            <script>    
                let btnShow = document.querySelector('.show-container .show button');
                let showContainer = document.querySelector('.show-container');

                btnShow.addEventListener('click', () => {
                    showContainer.classList.add('hide');
                })
            </script>
        ";

        echo $js;
    }

    function my_html()
    {
        $html = "
            <div class='show-container'>
                <div class='show'>
                    <h3 class='title'>{$this->title}</h3>
                    <div class='content'>{$this->content}</div>
                    <button class='success'>OK</button>
                </div>
            </div>        
        ";

        echo $html;
    }

    public function show($type_notification = "Success", $title = null, $content = null)
    {
        $this->type_notification = $type_notification;
        $this->title = $title;
        $this->content = $content;

        $this->my_html();
        $this->my_css();
        $this->my_js();
    }
}
