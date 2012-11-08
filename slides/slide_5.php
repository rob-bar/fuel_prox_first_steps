<section>
	<section>
		<h2>Controllers, which does what?</h2>
		<ul>
			<li>Base</li>
			<li>Template</li>
			<li>Rest</li>
			<li>Hybrid</li>
		</ul>
	</section>
	<section>
		<h2>Actions & ajaxheck</h2>
		<pre>
			<code contenteditable style="font-size: 18px;">
		    public function get_index() {
		        // This will be called when the HTTP method is GET.
		    }
		    public function post_index() {
		        // This will be called when the HTTP method is POST.
		    }
		    public function action_index() {
		        // This will be called when the HTTP POST OR GET.
		    }
		    //AJAXCHECK
		    Input::is_ajax();
			</code>
		</pre>
	</section>
	<section>
		<h2>Master Teplate & immediate template definition</h2>
		<pre>
			<code contenteditable style="font-size: 18px;">
				class Controller_Master extends Controller_Template {
					public $template = 'platform/template';

					public function before() {
						parent::before();
					}
					public function after($response) {
						$response = parent::after($response);
					}
				}
			</code>
		</pre>
	</section>
</section>