<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                    <p class="t cent botli">最新消息資料管理</p>
                    <form method="post"  action="api/edit.php">
                        <table width="100%">
                            <tbody>
                                <tr class="yel">
                                    <td width="68%">最新消息資料</td>

                                    <td width="7%">顯示</td>
                                    <td width="7%">刪除</td>

                                </tr>
                                <?php
                                    $table=$do;
                                    $db=new DB('news');
                                    $rows=$db->all();
                                    foreach($rows as $row){
                                        $isChk=($row['sh']==1)?'checked':'';
                                ?>
                                <tr class='cent'>
                                    
                                    <td width="68%"><textarea name="text[]"  style='width:90%;height:60px'><?=$row['text'];?></textarea> </td>
                                    <td width="7%"><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$isChk;?>> </td>
                                    <td width="7%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>

                                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <table style="margin-top:40px; width:70%;">
                            <tbody>
                                <tr>
                                    <td width="200px"><input type="button"
                                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/news.php?table=<?=$table;?>&#39;)"
                                            value="新增最新消息資料"></td>
                                            <input type="hidden" name="table" value='<?=$table;?>'>
                                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </form>
                </div>