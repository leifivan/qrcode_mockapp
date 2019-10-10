<?= $this->Html->script('vendor/qrcode-generator/qrcode') ?>
<?= $this->Html->script('vendor/qrcode-generator/qrcode_SJIS') ?>
<?= $this->Html->script('qrcode/new_qrcode_javascript') ?>

<div>
    <h3>Generate New QR Codes (Javascript)</h3>
    See <a href="https://github.com/kazuhikoarase/qrcode-generator/tree/master/js">QR Code Generator JS</a>

    <form name="qrForm">
      <span>TypeNumber:</span>
      <select name="t"></select>
      <span>ErrorCorrectionLevel:</span>
      <select name="e">
        <option value="L">L(7%)</option>
        <option value="M" selected="selected">M(15%)</option>
        <option value="Q">Q(25%)</option>
        <option value="H">H(30%)</option>
      </select>
      <span>Mode:</span>
      <select name="m">
        <option value="Numeric">Numeric</option>
        <option value="Alphanumeric">Alphanumeric</option>
        <option value="Byte" selected>Byte</option>
        <option value="Kanji">Kanji</option>
      </select>
      <span>Multibyte:</span>
      <select name="mb">
        <option value="default">None</option>
        <option value="SJIS">SJIS</option>
        <option value="UTF-8" selected>UTF-8</option>
      </select>
      <br/>
      <textarea name="msg" rows="10" cols="40">QR Code!</textarea>
      <br/>
      <input type="button" value="update" onclick="update_qrcode()"/>
      <div id="qr"></div>
    </form>
</div>