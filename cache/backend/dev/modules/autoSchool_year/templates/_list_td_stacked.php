<td colspan="6">
  <?php echo __('%%id%% - %%value%% - %%start_at%% - %%end_at%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($school_year->getId(), 'school_year_edit', $school_year), '%%value%%' => $school_year->getValue(), '%%start_at%%' => false !== strtotime($school_year->getStartAt()) ? format_date($school_year->getStartAt(), "f") : '&nbsp;', '%%end_at%%' => false !== strtotime($school_year->getEndAt()) ? format_date($school_year->getEndAt(), "f") : '&nbsp;', '%%created_at%%' => false !== strtotime($school_year->getCreatedAt()) ? format_date($school_year->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($school_year->getUpdatedAt()) ? format_date($school_year->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>