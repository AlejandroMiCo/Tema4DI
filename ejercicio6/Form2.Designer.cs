namespace ejercicio6
{
    partial class Form2
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form2));
            txtPass = new TextBox();
            button1 = new Button();
            SuspendLayout();
            // 
            // txtPass
            // 
            txtPass.Location = new Point(58, 51);
            txtPass.Name = "txtPass";
            txtPass.PasswordChar = '*';
            txtPass.Size = new Size(139, 23);
            txtPass.TabIndex = 0;
            // 
            // button1
            // 
            button1.DialogResult = DialogResult.OK;
            button1.Location = new Point(58, 107);
            button1.Name = "button1";
            button1.Size = new Size(139, 63);
            button1.TabIndex = 1;
            button1.Text = "enviar";
            button1.UseVisualStyleBackColor = true;
            // 
            // Form2
            // 
            AcceptButton = button1;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(249, 223);
            Controls.Add(button1);
            Controls.Add(txtPass);
            Icon = (Icon)resources.GetObject("$this.Icon");
            Name = "Form2";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "PIN de acceso";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        public TextBox txtPass;
        private Button button1;
    }
}