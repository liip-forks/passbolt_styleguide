<div class="dialog-wrapper">
    <div class="dialog confirm">
        <div class="dialog-header">
            <h2>Are you sure?</h2>
            <a class="dialog-close js-dialog-close" href="#">
                <i class="fa fa-close"></i>
                <span class="visuallyhidden">close</span>
            </a>
        </div>
        <div class="js_dialog_content dialog-content">
            <div class="form-content">
                <p>
                    <strong>You are about to delete the group "IT Support"!</strong>
                </p>
                <p>This group currently own 5 passwords. Please select a group manager to transfer
                the ownership to. Other users in this group will lose access to these passwords.</p>
                <div class="input select required">
                    <label for="Owner">New Owner</label>
                    <select name="data[User][uuid]" id="OwnerId" class="fluid">
                        <option value="<UUID>" selected="selected">Ada Lovelace (ada@passbolt.com)</option>
                        <option value="<UUID>" >Betty Holberton (betty@passbolt.com)</option>
                        <option value="<UUID>" >Carol Shaw (carol@passbolt.com)</option>
                    </select>
                </div>
            </div>

            <div class="submit-wrapper clearfix">
                <input type="submit" value="delete group" class="button primary warning">
                <a class="js-dialog-close cancel" href="#">cancel</a>
            </div>
        </div>
    </div>
</div>