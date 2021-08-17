using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Quadratic
{
    public partial class Form1 : Form
    {
        public double Func(double x)
        {
            return 2 * x * x - Math.Exp(x);
        }
        public double DFunc(double x)
        {
            return 4 * x;
        }
        public Form1()
        {
            InitializeComponent();
        }
        private void button1_Click(object sender, EventArgs e)
        {
            List<double> x = new List<double>();
            int i = 0;
            double x0 = double.Parse(textBox1.Text);
            double h = double.Parse(textBox2.Text);
            double p = double.Parse(textBox3.Text);
            double f_m = DFunc(x0);
            x[0] = x0;
            if (f_m > 0)
                do
                {
                    i++;
                    x[i + 1] = x[i] - Math.Pow(2, i) * h;
                }
                while (DFunc(x[i+1])*DFunc(x[i]) <= 0);
            else
                do
                {
                    i++;
                    x[i + 1] = x[i] + Math.Pow(2, i) * h;
                }
                while (DFunc(x[i + 1]) * DFunc(x[i]) <= 0);

            textBox4.Text = Convert.ToString(xm);
            textBox5.Text = Convert.ToString(Func(xm));
            textBox6.Text = Convert.ToString(i);
         }
    }
}
