<tr>
	<td>{$language}</td>
	<td>{$template}</td>
	<td>
		<a href="{$linker->getLink(array('section' => 'templates', 'page' => $page, 'action' => 'edit', 'subjectid' => $subjectid, 'mailbodyid' => $mailbodyid))}" style="text-decoration:none;">
			<img src="images/Froxlor/icons/edit.png" alt="{$lng['panel']['edit']}" />
		</a>&nbsp;	
		<a href="{$linker->getLink(array('section' => 'templates', 'page' => $page, 'action' => 'delete', 'subjectid' => $subjectid, 'mailbodyid' => $mailbodyid))}" style="text-decoration:none;">
			<img src="images/Froxlor/icons/delete.png" alt="{$lng['panel']['delete']}" />
		</a>
	</td>
</tr>

