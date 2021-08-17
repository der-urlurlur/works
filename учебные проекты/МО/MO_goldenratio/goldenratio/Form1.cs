using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace goldenratio
{
    public partial class Form1 : Form
    {
        public static double f(double x)
        {
            return -Math.Exp(-x) * Math.Log(x);
        }
        public double a, b, p, xmin, x1, x2, k, n = 0;
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            a = double.Parse(textBox1.Text);
            b = double.Parse(textBox2.Text);
            p = double.Parse(textBox3.Text);
            k = (Math.Sqrt(5) - 1) / 2;
            x1 = b - (b - a) * k;
            x2 = a + (b - a) * k;    
            do
            {
                if (f(x2) < f(x1))
                    a = x1;
                else
                    b = x2;
                x1 = b - (b - a) * k;
                x2 = a + (b - a) * k;
                n++;
                
                richTextBox1.Text = richTextBox1.Text + "n = " + n + " x1 = " + x1 + " x2 = " + x2 + "\n";
            } while (Math.Abs(b - a) > p);
            xmin = (x1 + x2) / 2;
            textBox4.Text = Convert.ToString(xmin);
            textBox5.Text = Convert.ToString(f(xmin));
            textBox6.Text = Convert.ToString(n);

        }
    }
}
