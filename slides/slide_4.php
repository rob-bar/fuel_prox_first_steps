<section>
	<h2>Loading template strategy</h2>
	<pre>
		<code contenteditable style="font-size: 18px;">
			$view = View::forge('home/index');
			$view->username = 'Joe14';
			//FILTERED
			$view->title = 'Home';
			$view->set('username', 'Joe14');
			$view->set('title', 'Home');
			//NOT FILTERED
			$view->set_safe('pag', $pagination);
			return $view;
			//GOOD

			$data['username'] = 'Joe14';
			$data['title'] = 'Home';
			return View::forge('home/index', $data);
			//BAD
		</code>
	</pre>
</section>