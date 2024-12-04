namespace ejercicio6
{
    public partial class Movil : Form
    {
        public Movil() //Salir con X, titulo, icono, revision cambio de color tras reset, excepcion en archivo
        {
            InitializeComponent();

            for (int i = 0; i < 12; i++)
            {
                Button button1 = new Button();

                button1.Location = new Point(50 + (100 * (i % 3)), 200 + (80 * (i / 3)));
                button1.Name = "button1";
                button1.Size = new Size(60, 40);
                button1.TabIndex = 1;

                button1.Tag = false;

                if (i < 9)
                {
                    button1.Text = (i + 1).ToString();
                }
                else
                {
                    switch (i)
                    {
                        case 9:
                            button1.Text = "*";
                            break;
                        case 10:
                            button1.Text = "0";
                            break;
                        default:
                            button1.Text = "#";
                            break;
                    }
                }

                button1.Click += (sender, e) =>
                {
                    txtTelefono.Text += button1.Text;
                    button1.BackColor = Color.Yellow;
                    button1.Tag = true;
                };

                button1.MouseEnter += (sender, e) =>
                {
                    button1.BackColor = Color.Magenta;
                };

                button1.MouseLeave += (sender, e) =>
                {
                    if ((bool)button1.Tag)
                    {
                        button1.BackColor = Color.Yellow;
                    }
                    else
                    {
                        button1.BackColor = Color.White;
                    }
                    ;
                };

                button1.UseVisualStyleBackColor = true;

                this.Controls.Add(button1);
            }
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            bool error = true;
            string pass = "1234";
            int cont = 0;
            Form2 form2 = new Form2();
            do
            {
                switch (form2.ShowDialog())
                {
                    case DialogResult.OK:
                        if (form2.txtPass.Text == pass)
                        {
                            error = false;
                        }
                        else
                        {
                            MessageBox.Show(
                                "Error en la contraseña",
                                "Error",
                                MessageBoxButtons.OK,
                                MessageBoxIcon.Error
                            );
                        }
                        cont++;
                        break;
                    default:
                        error = false;
                        this.Close();
                        break;
                }
                if (cont == 3 && error)
                {
                    this.Close();
                }
            } while (error && cont < 3);
            ;
        }

        private void btnReset_Click(object sender, EventArgs e)
        {
            txtTelefono.Text = "";
            foreach (Control ctrl in Controls)
            {
                if (ctrl.GetType() == typeof(Button))
                {
                    ((Button)ctrl).Tag = false;
                    ((Button)ctrl).BackColor = Color.White;
                }
            }
        }

        private void acercaDeToolStripMenuItem_Click(object sender, EventArgs e)
        {
            MessageBox.Show(
                "Es una app con interfaz de movil antiguo con la intencion de practicar diseño en windowsForms",
                "Movil",
                MessageBoxButtons.OK,
                MessageBoxIcon.Information
            );
        }

        private void grabarNumeroToolStripMenuItem_Click(object sender, EventArgs e)
        {
            if (txtTelefono.Text != "")
            {
                SaveFileDialog saveFileDialog = new SaveFileDialog();

                saveFileDialog.OverwritePrompt = false;
                if (saveFileDialog.ShowDialog() == DialogResult.OK)
                {
                    try
                    {
                        using (StreamWriter sw = new StreamWriter(saveFileDialog.FileName, true))
                        {
                            sw.WriteLine(txtTelefono.Text);
                        }
                    }
                    catch (Exception ex)
                        when (ex is ArgumentException
                            || ex is UnauthorizedAccessException
                            || ex is IOException
                        )
                    {
                        MessageBox.Show(
                            "Error al seleccionar el archivo",
                            "Error",
                            MessageBoxButtons.OK,
                            MessageBoxIcon.Error
                        );
                    }
                }
            }
        }

        private void salirToolStripMenuItem_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
